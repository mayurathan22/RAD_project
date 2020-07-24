<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{


    public function store(Request $request){
   
        $blog = new Blog;
        
        $this->validate($request,[
            'description'=>'required',
            'photo'=>'required',
        ]);

        $blog->description=$request->description;
        $blog->photo=$request->photo;
      
        $blog->save();
      
        $blogs=Blog::all();
       
       return view('blog')->with('blogs',$blogs);
    }

    public function deleteBlog($id){
        $blog=Blog::find($id);
        if(!$blog){
            abort(404);
        }
        $blog->delete();
        $blogs=Blog::all();
       
       return view('blog')->with('blogs',$blogs);
    }
    public function updateBlog($id){

       $blogs=Blog::find($id);
       if(!$blogs){
        abort(404);
        }
        
       return view('updateBlog')->with('blogs' ,$blogs);


    }

    public function editBlog(Request $request){

        $id=$request->id;
        $description=$request->description;
        $photo=$request->photo;

        $data=Blog::find($id);

        $data->description=$description;
        $data->photo=$photo;

        $data->save();
        
        $blogs=Blog::all();

        return view('blog')->with('blogs',$blogs);

    }

}


