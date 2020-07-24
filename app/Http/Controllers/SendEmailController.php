<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\FeedbackMail;
use App\User;
use App\Order;

class SendEmailController extends Controller
{
   public function index(){       
        return view('sendEmail');
    }

   public function send($id){
       $order=Order::find($id);
       if(!$order){
        abort(404);
      }
        $user=User::find($order->user_id);
        $data =array(
            'name' => $user->name,
            'email' => $user->email,
            
        );
        Mail::to($user->email)->send(new SendMail($data));

        $order->is_email=1;
        $order->save();
        return back()->with('success','Thans for contacting us!') ;
      //  return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function get(Request $request){
        
         $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
         ]);
         $data =array(
             'name' => $request->name,
             'email' => $request->email,
             'subject' => $request->subject,
             'message' =>$request->message,
             
         );
         Mail::to('jayaniswimmingpool@gmail.com')->send(new FeedbackMail($data));
       //  return back()->with('success','Thans for contacting us!') ;
        
         return redirect()->back()->with('success', 'Product added to cart successfully!');
     }
     
}
