<?php
namespace App\Http\Controllers;
use App\Post;
use Session;
use Mail;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function getContact(){
 		return view('pages.contact');
	}

	public function getService(){
        return view('pages.service');
    }

    public function postContact(Request $request){
            $this->validate($request, array(
                'full_name'=>'required|max:120',
                'email'=>'required|email',
                'phone'=>'required|min:7|numeric',
                'company'=>'required|max:120',
                'message'=>'required|min:3',
                'orders'=>'required'
            ));

            $data=array(
                'full_name'=>$request->full_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'company'=>$request->company,
                'bodyMessage'=>$request->message,
                'orders'=>$request->orders,
                'budget'=>$request->budget
            );

               Mail::send('emails.contact', $data, function($message)use ($data){
                   $message->from($data['email']);
                   $message->to('sardorallaberganov96@gmail.com');
                   $message->subject($data['bodyMessage']);
               });
               Session::flash('success', '  ваше письмо успешно отправлено');
               return redirect(route('contact'));
	}

}
