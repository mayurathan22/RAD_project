<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product_category;
use App\Product;
use App\Tag;
use App\About;
use App\Social;
class CategoryController extends Controller
{
    public function store(Request $request){
        $category = new Category;
        $this->validate($request,[
            'name'=>'required',
            'photo'=>'required',
        ]);
        $category->name=$request->name;
        $category->photo=$request->photo;

        $category->save();

        $data=Category::all();
        return view('category')->with('categories',$data);
    }

    public function deleteCategory($id){
        $category=Category::find($id);
        if(!$category){
            abort(404);
        }
        $category->delete();
        $data=Category::all();
        return view('category')->with('categories',$data);
    }

    public function filter($id){
        $categories=Category::all();
        $cats=Category::find($id);
        if(!$cats){
            abort(404);
        }
        $cat_pros=Product_category::all();
        $products=Product::all();
        $tags=Tag::all();
        $abouts=About::find(1);
        $socials=Social::find(1);
        return view('showcat')->with('data',['categories'=>$categories,'cats'=>$cats, 'cat_pros'=>$cat_pros, 'products'=>$products ,'ids'=>$id, 'tags'=>$tags,'abouts'=>$abouts,'socials'=>$socials]);

    }
    public function updateCategory($id){

        $categories=Category::find($id);
        if(!$categories){
            abort(404);
        }         
        return view('updateCategory')->with('categories',$categories); 
 
     }
 
     public function editCategory(Request $request){
 
         $id=$request->id;
         $name=$request->name;
         $photo=$request->photo;
 
         $data=Category::find($id);
 
         $data->name=$name;
         $data->photo=$photo;
 
         $data->save();
       
         $categories=Category::all();
         return view('category')->with('categories',$categories); 
     }
}
