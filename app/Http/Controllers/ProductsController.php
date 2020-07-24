<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\tag;
use App\Order;
use App\Order_product;
use App\About;
use App\Social;

class ProductsController extends Controller
{
    
    public function index(Request $request){
        $products = Product::all(); 
        $tags=Tag::all();
        $categories=Category::all();
        $abouts=About::find(1);
        $socials=Social::find(1);
        if(!$request->session()->get('cart')){
            $request->session()->put('cart', array());
        }
       return view('products')->with('data',['products'=>$products,'tags'=>$tags,'categories'=>$categories,'abouts'=>$abouts,'socials'=>$socials]);
  
     //   return view('products', compact('products','categories'));
    }
    public function cart(){
        $products=Product::all();
        $tags= Tag::all();
        $categories= Category::all();
        $abouts=About::find(1);
        $socials=Social::find(1);
        $items = session()->get('cart');
        $total=0;
        foreach($items as $id => $details ){
            $total += $details['price'] * $details['quantity'];     
        }
        if($total==0){
            return view('products')->with('data',['products'=>$products,'tags'=>$tags,'categories'=>$categories,'abouts'=>$abouts,'socials'=>$socials]);
        }else{
            return view('cart')->with('data',['products'=>$products,'tags'=>$tags,'categories'=>$categories,'abouts'=>$abouts,'socials'=>$socials]);

        }
       // return view('cart');
    }
    
    public function addToCart($id){
        $product = Product::find($id); 
        if(!$product) { 
            abort(404); 
        } 
        $cart = session()->get('cart'); 
        // if cart is empty then this the first product
        if(!$cart) { 
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ]; 
            session()->put('cart', $cart); 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) { 
            $cart[$id]['quantity']++; 
            session()->put('cart', $cart); 
            return redirect()->back()->with('success', 'Product added to cart successfully!'); 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function update(Request $request){
        if($request->id and $request->quantity){
            $cart = session()->get('cart'); 
            $cart[$request->id]["quantity"] = $request->quantity; 
            session()->put('cart', $cart); 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request){
        if($request->id) { 
            $cart = session()->get('cart'); 
            if(isset($cart[$request->id])) { 
                unset($cart[$request->id]); 
                session()->put('cart', $cart);
            } 
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function buy(){
        $user = Auth::user();
        if(is_null($user)){
            return redirect()->route('login');
        }else {
        $products=Product::all();
        $tags= Tag::all();
        $categories= Category::all();
        $abouts=About::find(1);
        $socials=Social::find(1);
        return view('order')->with('data',['products'=>$products,'tags'=>$tags,'categories'=>$categories,'abouts'=>$abouts,'socials'=>$socials]);
        }
    }

    public function order(Request $request){
        $user = Auth::user();
        $items = session()->get('cart');
        $order = new Order;    
        $order->user_id=$user->id;
        $total=0;
        foreach($items as $id => $details ){
            $total += $details['price'] * $details['quantity'];     
        }
        foreach($items as $id => $details ) {
        $order->total=$total;         
        }
        $this->validate($request,[
            'address'=>'required',
            'phone'=>'required',
        ]);
        $order->address=$request->address;
        $order->phone=$request->phone;
        $order->save();
        $orders=Order::all();
        $counts = Order::count();
        
        foreach($items as $id => $details ){
            $order_product = new Order_product;
            $order_product->product_id=$id;
            $order_product->quentity=$details['quantity'];
            $order_product->order_id=$counts;
            $total += $details['price'] * $details['quantity'];
            $order_product->save();
        }
        $cart = session()->get('cart'); 
        foreach($items as $id => $details ) {
                         
                unset($cart[$id]); 
                session()->put('cart', $cart);           
        }
        
        $tags=Tag::all();
        $categories=Category::all();
        $abouts=About::find(1);
        $socials=Social::find(1);
        $products = Product::all(); 
        return view('products')->with('data',['tags'=>$tags,'categories'=>$categories,'abouts'=>$abouts,'socials'=>$socials,'products'=>$products]);

    }
    
    public function orderview(){
        $orders = Order::all();
        return view('orderDetails')->with('orders',$orders);
    }

    
    public function updated($id){
        $order=Order::find($id);
        if(!$order){
            abort(404);
        }
        $order->is_accepted=1;
        $order->save();
        return redirect()->back();
    }

    public function updatenot($id){
        $order=Order::find($id);
        if(!$order){
            abort(404);
        }
        $order->is_accepted=0;
        $order->save();
        return redirect()->back();
    }

    public function ordersee($id){
        
        $orders=Order_product::all();
        $id=$id;
        return view('ordersee')->with('data',['orders'=>$orders,'ids'=>$id]);
    }
    public function notcompleted(){
        $orders = Order::all();
        return view('notcompleted')->with('orders',$orders);
    }
}
