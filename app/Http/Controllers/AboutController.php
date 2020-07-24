<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function store(Request $request){
        //return $request->all();
        $about = new About;
        
        $this->validate($request,[
            'address1'=>'required',
            'address2'=>'required',
            'address3'=>'required',
            'phone1'=>'required',
            'phone2'=>'required',
            'phone3'=>'required',
            'vision'=>'required',
            'email'=>'required',

            'engineer_name'=>'required',
            'engineer_photo' =>'required',
            'engineer_review' => 'required',

            'archi_name1'=> 'required',
            'archi_photo1'=> 'required',
            'archi_review1'=> 'required',

            'archi_name2'=> 'required',
            'archi_photo2'=> 'required',
            'archi_review2'=> 'required',

            'client_name1'=> 'required',
            'client_photo1'=> 'required',
            'client_review1'=> 'required',

            'client_name2'=> 'required',
            'client_photo2'=> 'required',
            'client_review2'=> 'required',

            'client_name3'=> 'required',
            'client_photo3'=> 'required',
            'client_review3'=> 'required',


        ]);
        $about->address1=$request->address1;
        $about->address2=$request->address2;
        $about->address3=$request->address3;
        $about->phone1=$request->phone1;
        $about->phone2=$request->phone2;
        $about->phone3=$request->phone3;
        $about->vision=$request->vision;
        $about->email=$request->email;

        $about->engineer_name=$request->engineer_name;
        $about->engineer_photo=$request->engineer_photo;
        $about->engineer_review=$request->engineer_review;

        $about->archi_name1=$request->archi_name1;
        $about->archi_photo1=$request->archi_photo1;
        $about->archi_review1=$request->archi_review1;

        $about->archi_name2=$request->archi_name2;
        $about->archi_photo2=$request->archi_photo2;
        $about->archi_review2=$request->archi_review2;

        $about->client_name1=$request->client_name1;
        $about->client_photo1=$request->client_photo1;
        $about->client_review1=$request->client_review1;

        $about->client_name2=$request->client_name2;
        $about->client_photo2=$request->client_photo2;
        $about->client_review2=$request->client_review2;

        $about->client_name3=$request->client_name3;
        $about->client_photo3=$request->client_photo3;
        $about->client_review3=$request->client_review3;
              
        $about->save();
        
        $abouts=About::all();

       return view('getCompanydetails')->with('abouts',$abouts);
    }

    

    public function updateAbout($id){
       $abouts=About::find($id);
       if(!$abouts){
        abort(404);
        }       
       return view('updateAbout')->with('abouts',$abouts);
    }

    public function editAbout(Request $request){
        $id=$request->id;
        $address1=$request->address1;
        $address2=$request->address2;
        $address3=$request->address3;
        $phone1=$request->phone1;
        $phone2=$request->phone2;
        $phone3=$request->phone3;
        $vision=$request->vision;
        $email=$request->email;
        
        $engineer_name=$request->engineer_name;
        $engineer_photo=$request->engineer_photo;
        $engineer_review=$request->engineer_review;

        $archi_name1=$request->archi_name1;
        $archi_photo1=$request->archi_photo1;
        $archi_review1=$request->archi_review1;

        $archi_name2=$request->archi_name2;
        $archi_photo2=$request->archi_photo2;
        $archi_review2=$request->archi_review2;

        $client_name1=$request->client_name1;
        $client_photo1=$request->client_photo1;
        $client_review1=$request->client_review1;

        $client_name2=$request->client_name2;
        $client_photo2=$request->client_photo2;
        $client_review2=$request->client_review2;
        
        $client_name3=$request->client_name3;
        $client_photo3=$request->client_photo3;
        $client_review3=$request->client_review3;

        $data=About::find($id);

        $data->address1=$address1;
        $data->address2=$address2;
        $data->address3=$address3;
        $data->phone1=$phone1;
        $data->phone2=$phone2;
        $data->phone3=$phone3;
        $data->vision=$vision;
        $data->email=$email;

        
        $data->engineer_name=$engineer_name;
        $data->engineer_photo=$engineer_photo;
        $data->engineer_review=$engineer_review;

        $data->archi_name1=$archi_name1;
        $data->archi_photo1=$archi_photo1;
        $data->archi_review1=$archi_review1;

        $data->archi_name2=$archi_name2;
        $data->archi_photo2=$archi_photo2;
        $data->archi_review2=$archi_review2;

        $data->client_name1=$client_name1;
        $data->client_photo1=$client_photo1;
        $data->client_review1=$client_review1;

        $data->client_name2=$client_name2;
        $data->client_photo2=$client_photo2;
        $data->client_review2=$client_review2;
        
        $data->client_name3=$client_name3;
        $data->client_photo3=$client_photo3;
        $data->client_review3=$client_review3;

        $data->save();
      
        $abouts=About::all();
       
        return view('getCompanydetails')->with('abouts',$abouts);
    }

}
