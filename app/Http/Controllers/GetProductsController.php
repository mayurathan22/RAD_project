<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tag;
use App\Category;
use App\Order;
class GetProductsController extends Controller
{
   
    public function store(Request $request){
       
        $product = new Product;
        
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'photo'=>'required',
            'price'=>'required',

        ]);
        $product->name=$request->name;
        $product->description=$request->description;
        $product->photo=$request->photo;
        $product->price=$request->price;
      
        $product->save();


        $product->tags()->sync($request->tags);
        $product->categories()->sync($request->categories);
        
        $products=Product::all();
        $tags=Tag::all();
        $categories=Category::all();

       return view('getProducts')->with('data',['products'=>$products,'tags'=>$tags,'categories'=>$categories]);
    }

    public function deleteProduct($id){
        $product=Product::find($id);
        if(!$product){
            abort(404);
        }
        $orders=Order::all();
       
        $product->delete();
        $products=Product::all();
        $tags=Tag::all();
        $categories=Category::all();
       return view('getProducts')->with('data',['products'=>$products,'tags'=>$tags,'categories'=>$categories]);
    }
    public function updateProduct($id){
       $products=Product::find($id);
       if(!$products){
        abort(404);
        }
       $tags=Tag::all();
       $categories=Category::all();
        
       return view('updateProduct')->with('data',['products'=>$products,'tags'=>$tags,'categories'=>$categories]);


    }

    public function editProducts(Request $request){

        $id=$request->id;
        $name=$request->name;
        $description=$request->description;
        $photo=$request->photo;
        $price=$request->price;

        $data=Product::find($id);

        $data->name=$name;
        $data->description=$description;
        $data->photo=$photo;
        $data->price=$price;

        $data->save();
        $data->tags()->sync($request->tags);
        $data->categories()->sync($request->categories);
        $products=Product::all();
        $tags=Tag::all();
        $categories=Category::all();
        return view('getProducts')->with('data',['products'=>$products,'tags'=>$tags,'categories'=>$categories]);

    }

}
