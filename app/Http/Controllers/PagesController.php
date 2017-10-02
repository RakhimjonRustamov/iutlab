<?php

namespace App\Http\Controllers;
use App\Post;
use Session;
use Mail;
use Illuminate\Http\Request;
use App\Mail\Message;
class PagesController extends Controller
{
  

   public function getAbout(){
   		return view('pages.about');
   }

   public function getContact(){
 		return view('pages.contact');
	}

	public function getService(){
        return view('pages.service');
    }

   public function postContact(Request $request){
            $this->validate($request, array(
                'email'=>'required|email',
                'message'=>'required|min:3'
            ));

            $data=array(
                'email'=>$request->email,
                'message'=>$request->message
            );

         //   \Mail::to($data)->send(new Message);




       Mail::send('emails.contact', $data, function($message)use ($data){
           $message->from($data['email']);
           $message->to('rakhimjon.rustamov@gmail.com');
           $message->subject($data['message']);
       });



       Session::flash('success', 'Your mail is sent');
	    redirect('/');
	}

}
