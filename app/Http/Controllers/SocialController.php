<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Social;
class SocialController extends Controller
{
    public function store(Request $request){
        //return $request->all();
        $social = new Social;
        
        $this->validate($request,[
            'instagram'=>'required',
            'google'=>'required',
            'pinterest'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'youtube'=>'required',
            'tumblr'=>'required',
        ]);
        $social->instagram=$request->instagram;
        $social->google=$request->google;
        $social->pinterest=$request->pinterest;
        $social->facebook=$request->facebook;
        $social->twitter=$request->twitter;
        $social->youtube=$request->youtube;
        $social->tumblr=$request->tumblr;
 
        $social->save();
        
        $socials=About::all();

       return view('getSocialdetails')->with('socials',$socials);
    }

    

    public function updateSocial($id){
       $socials=Social::find($id);
       if(!$socials){
        abort(404);
        }       
       return view('updateSocial')->with('socials',$socials);
    }

    public function editSocial(Request $request){
        $id=$request->id;
        $instagram=$request->instagram;
        $google=$request->google;
        $pinterest=$request->pinterest;
        $facebook=$request->facebook;
        $twitter=$request->twitter;
        $youtube=$request->youtube;
        $tumblr=$request->tumblr;
 
        $data=Social::find($id);

        $data->instagram=$instagram;
        $data->google=$google;
        $data->pinterest=$pinterest;
        $data->facebook=$facebook;
        $data->twitter=$twitter;
        $data->youtube=$youtube;
        $data->tumblr=$tumblr;

        $data->save();
      
        $socials=Social::all();
       
        return view('getSocialdetails')->with('socials',$socials);
    }

}
