<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Tag;


class CategoryTagController extends Controller
{
    public function __construct() 
    {
       $this->middleware('auth');
    }

    public function getCategoty()
    {
		$data['getCategory'] = Category::orderBy('id', 'desc')->paginate(10);
		return view('admin/category_tag/view_add_category',$data);
    }

    public function addCategoty(Request $request)
    {

      $this->validate($request, array(
            'category_name' => 'required|unique:tbl_category,category_name',
      ));

    	$post = new Category;
	 	  $post->category_name =  $request->category_name;
     	$post->save();
  		return redirect()->back()->with('success','Category Added Successfully!');
    }

    public function editCategoty($category_id)
    {
		$data['editCategory'] = Category::find($category_id);
		return view('admin/category_tag/edit_category',$data);	
    }

    public function updateCategoty($category_id, Request $request)
    {
    	$post = Category::find($category_id);;	 	
    	$post->category_name =  $request->category_name;
      	$post->save();
  		return redirect('account/category/view-add-category')->with('success','Category updated Successfully!');	
    }

    //tag

    public function getTag()
    {
      	$data['getTag'] = Tag::orderBy('id', 'desc')->paginate(10);
  		  return view('admin/category_tag/view_add_tag',$data);
    }

   public function addTag(Request $request)
   {
      $this->validate($request, array(
              'tag_name' => 'required|unique:tbl_tag,tag_name',
      ));
      
   		$post = new Tag;
 	    $post->tag_name =  $request->tag_name;
    	$post->save();
  		return redirect()->back()->with('success','Tag Added Successfully!');
   }

   public function editTag($tag_id)
   {
   		$data['editTag'] = Tag::find($tag_id);
		  return view('admin/category_tag/edit_tag',$data);		
   }

   public function updateTag($tag_id, Request $request)
   {
		  $post = Tag::find($tag_id);;	 	
    	$post->tag_name =  $request->tag_name;
    	$post->save();
  		return redirect('account/tag/view-add-tag')->with('success','Tag updated Successfully!');	
   }
}
