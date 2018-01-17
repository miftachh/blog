<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\PostModel;
use App\Category;
use App\Tag;
use App\Project;
use App\Contact;
use DB;
use Redirect;


class HomeController extends Controller
{
    

    public function __construct()
    {


    }

    public function getHome()
    {
		$data['getlaravel'] = PostModel::where('url_select','laravel')->orderBy('id', 'desc')->limit(6)->get();
        $data['getcodeigniter'] = PostModel::where('url_select','codeigniter')->orderBy('id', 'desc')->limit(6)->get();
        $data['getmysql'] = PostModel::where('url_select','mysql')->orderBy('id', 'desc')->limit(6)->get();
        $data['getjavascript'] = PostModel::where('url_select','javascript')->orderBy('id', 'desc')->limit(6)->get();

        $data['getproject'] = Project::orderBy('id', 'desc')->limit(6)->get();
    	return view('front.home',$data);
    }

    public function getAllProject()
    {
        $data['getproject'] = Project::where('status','0')->paginate(20);
        return view('front.project',$data);      
    }

    public function getLaravelTutorial()
    {
        $data['gettutorial'] = PostModel::where('url_select','laravel')->orderBy('id', 'desc')->paginate(20);
        return view('front.laravel_tutorial',$data);
    }

    public function getCodeigniterTutorial()
    {
        $data['gettutorial'] = PostModel::where('url_select','codeigniter')->orderBy('id', 'desc')->paginate(20);
        return view('front.codeigniter_tutorial',$data);   
    }

    public function getMysqlTutorial()
    {
        $data['gettutorial'] = PostModel::where('url_select','mysql')->orderBy('id', 'desc')->paginate(20);
        return view('front.mysql_tutorial',$data);      
    }

    public function getJavascriptTutorial()
    {
        $data['gettutorial'] = PostModel::where('url_select','javascript')->orderBy('id', 'desc')->paginate(20);
        return view('front.javascript_tutorial',$data);         
    }

    public function Category($categoryname)
    {
        $data['category'] = Category::where('category_name',$categoryname)->first();
        $data['getcategory'] = PostModel::where('url_select',$categoryname)->paginate(20);
        return view('front.category',$data);    
    }

    public function Tag($tagname)
    {
        $tag = Tag::where('tag_name',$tagname)->first();
        $posTag = DB::table('post_model_tag')->where('tag_id', $tag->id)->get();
        
        $postId = []; 
        foreach ($posTag as $value) { 
            $postId[] = $value->post_model_id;
        }
        $data['tag'] = $tag; 
        $data['gettag'] = PostModel::whereIn('id',$postId)->paginate(20);
        return view('front.tag',$data);    
    }

    public function getSlug($slug)
    {
        $data['getblog'] = PostModel::where('slug',$slug)->first();
        return view('front.page',$data);
    }

    public function subscribe(Request $request)
    {
        $email = $request->get('email');
        $subcribe = DB::table('tbl_subscribe')
                    ->where('email','=',$email)
                    ->count();
        if($subcribe>0)
        {
            DB::statement("UPDATE tbl_subscribe SET status='0', updated_at = '".date('Y-m-d H:i:s')."' WHERE email = '".$email."' ");
            $json['success'] = true;
        }
        else
        {
            DB::statement("INSERT INTO tbl_subscribe(`email`,`created_at`,`updated_at`) VALUES ('".$email."','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."')");
            $json['success'] = true;
        }
        echo json_encode($json);
    }

    public function ProjectDetail($slug)
    {
        $data['getproject'] = Project::where('slug',$slug)->first();
        return view('front.projectdetail',$data);      
    }


    //contact
    public function Contact()
    {
        return view('front.contact');      
    }

    public function PostContact(Request $request)
    {
        $contact = new Contact;
        $contact->name =  $request->name;
        $contact->email =  $request->email;
        $contact->message =  $request->message;
        $contact->save();
        return redirect()->back()->with('success','Your Contact Submited Successfully!!!');
    }

    //search 

    public function SearchTitle(Request $request)
    {
        $search = $request->get('term');  
        $data = array();
        $rows = PostModel::where('title','like','%'.$search.'%')->limit(15)->get();
        foreach( $rows as $row )
        {
            $data[] = array(
                'label' => $row->title,
                'value' => $row->title);  
        }
        echo json_encode($data);
        flush();
    }


    public function Search(Request $request)
    {
        $search = $request->get('search');
        $data['getSearch'] = PostModel::where('title','like','%'.$search.'%')->get();
        return view('front.search',$data);      
    }

}
