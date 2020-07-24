<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\About;

class PagesController extends Controller
{
    function index(){
        $blogs=Blog::all();
        $abouts=About::find(1);
        return view('layouts.index')->with('data',['blogs' => $blogs ,'abouts' => $abouts]);
    }

    function index1(){
        $abouts=About::find(1);
        return view('layouts.project')->with('abouts',$abouts);
    }

    function index2(){
        $abouts=About::find(1);
        return view('layouts.services')->with('abouts',$abouts);
    }

    function index3(){
        
        $blogs=Blog::all();
        $abouts=About::find(1);
        return view('layouts.blog')->with('data',['blogs' => $blogs ,'abouts' => $abouts]);
    }

    function index4(){
        $abouts=About::find(1);
        return view('layouts.about')->with('abouts',$abouts);
    }

    function index5(){
        $abouts=About::find(1);
        return view('layouts.contact')->with('abouts',$abouts);
    }

    function index6(){
      //  $abouts=About::find(1);
        return view('cal');
    }

    function index7(Request $request){
        //  $abouts=About::find(1);
        $length=$request->length;
        $width=$request->width;
        $stand=$request->stand;
        $motor=$request->motor;
        $filter=$request->filter;
        $sum=($length*$width)*500+$stand*100000+$motor*200000+$filter*10000;
     // $sum=10;
        return view('calculate')->with('sum',$sum);
      }

    function login(){
        $abouts=About::find(1);
        return view('layouts.login')->with('abouts',$abouts);
    }

    function store(){
    return view('layouts.store');
}
    public function buy(){
        $user = Auth::user();
        if(is_null($user)){
            return redirect()->route('login');
        }else {
            return view('order');
        }
    }
}

