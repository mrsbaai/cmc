<?php

namespace App\Http\Controllers;

use App\subscriber;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Carbon\Carbon;

class pagesController extends Controller
{
    
	Public function savecontact(){
		$email = Input::get('lg_email');
        $subject = Input::get('lg_subject');
        $content = Input::get('lg_message');
		
		$contact = new Contact();
            $contact->email = $email;
            $contact->subject = $subject;
            $contact->message = $content;
            $contact->created_at = Carbon::now();
            $contact->save();

            flash('Thank you for your message! We will get back to you as soon as possible.')->clear();
            return redirect()->intended('contact');
	}
	
    Public function subscribe(Request $request){

        $subscribed = subscriber::where('email', $request->email)->where('subscribed', true)->first();

       if(!is_null($subscribed)) {
            $message = "You are already subscribed.";
            return view('message')->with('title', 'Error!')->with('content',$message)->with('titleClass','text-danger');

        }else{
           $subscribed = subscriber::where('email', $request->email)->first();
           if ($subscribed ){
               $subscribed->subscribed = true;
               $subscribed->save();
           }else{
               $subscriber = new subscriber();
               $subscriber->email = $request->email;
               $subscriber->save();
           }


            $message = "Thank you for your subscription.";
            return view('message')->with('title', 'Subscribed Successfully!')->with('content',$message)->with('titleClass','text-success');

        }


        }
		
	Public function showcontact(){
		return view('contact');
	}
	
	Public function badlist(){
		return view('badlist');
	}
	
	Public function Home(){
		return view('home');
	}
}
