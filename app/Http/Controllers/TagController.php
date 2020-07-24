<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Category;
use App\Product_tag;
use App\Product;
use App\About;
use App\Social;

class TagController extends Controller
{
    public function store(Request $request){
        $tag = new Tag;
        $this->validate($request,[
            'name'=>'required',
        ]);
        $tag->name=$request->name;

        $tag->save();

        $data=Tag::all();
        return view('tag')->with('tags',$data);
    }

    public function deleteTag($id){
        $tag=Tag::find($id);
        if(!$tag){
            abort(404);
        }
        $tag->delete();
        $data=Tag::all();
        return view('tag')->with('tags',$data);
    }
    public function filter($id){
        $tags=Tag::all();
        $taggs=Tag::find($id);
        if(!$taggs){
            abort(404);
        }
        $pro_tags=Product_tag::all();
        $products=Product::all();
        $categories=Category::all();
        $abouts=About::find(1);
        $socials=Social::find(1);
        return view('showtag')->with('data',['categories'=>$categories,'taggs'=>$taggs, 'pro_tags'=>$pro_tags, 'products'=>$products ,'ids'=>$id, 'tags'=>$tags,'abouts'=>$abouts,'socials'=>$socials]);
    
    }

    public function updateTag($id){

        $tags=Tag::find($id);
        if(!$tags){
            abort(404);
        }         
        return view('updateTag')->with('tags',$tags); 
 
     }
 
     public function editTag(Request $request){
 
         $id=$request->id;
         $name=$request->name;
 
         $data=Tag::find($id);
 
         $data->name=$name;

         $data->save();
       
         $tags=Tag::all();
         return view('tag')->with('tags',$tags); 
     }
}
