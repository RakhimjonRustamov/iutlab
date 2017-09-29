<?php

namespace App\Http\Controllers;
use App\Post;
use Mail;
use Illuminate\Http\Request;

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
	    dd($request);
		$this->validate($request, array(
		    'full_name' => 'required|min:3',
			'email'=> 'required|email',
			'phone'=>'required',
			'company' => 'required',
			'message'=>'required|min:10',
            'budjet'=> 'required|min:3',
            'order'=>'required'
			  ));
		$data=array(
		'email'=>$request->email,
		'subject'=>$request->subject,
		'bodyMessage'=>$request->message
		 );

		Mail::send('emails.contact', $data, function($message)use ($data){
			$message->from($data['email']);
			$message->to('mr.rakhimjon.iut@gmail.com');
			$message->subject($data['subject']);
		});
	}
}
