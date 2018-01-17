<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;
use App\Http\Requests;
use App\Category;
use App\Tag; 
use DB;


class PostController extends Controller
{
    public function __construct() 
    {
       $this->middleware('auth');
    }


    public function dashboard()
    {
        return view('admin.dashboard/dashboard');
    }


    public function addPost()
    {
        $data['getCategory'] = Category::all();   
        $data['getPost'] = PostModel::all();   
        $data['getTag'] = Tag::all();   
    	return view('admin.post/addpost',$data);
    }

    public function viewPost()
    {
        $data['getpost'] = PostModel::orderBy('id', 'desc')->paginate(100);
    	return view('admin.post/viewpost',$data);	
    }
    public function InsertPost(Request $request)
    {

        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:tbl_add_post,slug',
            'meta_description' => 'required|min:1|max:150',
            'tags' => 'required',
            'url_select' => 'required',
            'body' => 'required'
        ));

        if(!empty($request->related_post))
        {
            $related_post = implode(",", $request->related_post);
        }
        else
        {
            $related_post = '';
        }

        $image = $request->file('imagefile');
        $post = new PostModel;
        $post->title =  $request->title;
        $post->url_select =  $request->url_select;
       
        if ($image != "")
        {
            $destination_path = getcwd() . '/blogimage';
            $scene_image = time(). '_' . str_replace(' ', '', str_replace("'", "", $request->get('imagefile'))) . '.png';
            $image->move($destination_path, $scene_image);
            $post->image = $scene_image;
        }
        $post->slug =  $request->slug;
        $post->meta_description =  $request->meta_description;
        $post->related_post =  $related_post;
        $post->category_id =  $request->category_id;

     	$post->body =  $request->body;
	 	$post->save();

        $post->tags()->sync($request->tags,false);
      

	 	return redirect('/account/post/view-post')->with('success','Post added Successfully!');
    }

    public function FilterCategory($categoryid)
    {
        $html = '';
       $getdata = PostModel::where('category_id',$categoryid)->get();   
        $html.='<select id="RelatedPost" multiple  style="text-transform:capitalize;" name="related_post[]" class="form-control col-md-7 col-xs-12">
                                <option value="">--Choose--</option>';
       foreach($getdata as $post)
       {
                $html.= '<option value='.$post->id.'>'.$post->title.'</option>';
       }
        $html.= '</select>';
        $json['success']=$html;
        echo json_encode($json);
    }

    public function editPost($postid)
    {
        $data['getdata'] = PostModel::all();   
        $data['getpost'] = PostModel::find($postid);
        $data['getCategory'] = Category::all();   
        $data['getTag'] = Tag::all();   
        return view('admin.post/editpost',$data);
    }

    public function UpdatePost($postid,Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
            'url_select' => 'required',
            'meta_description' => 'required'
        ));

        $image = $request->file('imagefile');

        if(!empty($request->related_post))
        {
            $related_post = implode(",", $request->related_post);
        }
        else
        {
            $related_post = '';
        }

        $post = PostModel::find($postid);
        $post->title =  $request->title;
        $post->url_select =  $request->url_select;
        $post->meta_description =  $request->meta_description;
        if ($image != "")
        {
            $destination_path = getcwd() . '/blogimage';
            $scene_image = time(). '_' . str_replace(' ', '', str_replace("'", "", $request->get('imagefile'))) . '.png';
            $image->move($destination_path, $scene_image);
            $post->image = $scene_image;
        }

        $post->category_id =  $request->category_id;
        $post->body =  $request->body;
        $post->related_post =  $related_post;
        $post->save();
        if(isset($request->tags)){
            $post->tags()->sync($request->tags);
        } else{
            $post->tags()->sync(array());
        }
        
        return redirect('/account/post/view-post')->with('success','Post Updated Successfully!');
    }


    public function DeletePost($postid)
    {
       $post = PostModel::find($postid);
       $post->tags()->detach();
       $post->delete();
       return redirect('/account/post/view-post')->with('success','Post Deleted Successfully!');
    }   

     
}
