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
	
		
	Public function showcontact(){
		return view('contact');
	}
	
	Public function badlist(){
		return view('badlist');
	}
	
	Public function Home(){
		return view('home');
	}
	
	
	Public function subscribe(Request $request){
		$email = Input::get('lg_email');

        if(!$this->valid_email($email)) {
            flash()->($email . ' Is not a valid email address.', 'Invalid E-mail!');
            return redirect()->intended('/');
        }


        $subscribed = subscriber::where('email', $email)->where('subscribed', true)->first();



       if(!is_null($subscribed)) {
           flash()->('Your e-mail already exists in our database.', 'Already subscribed!');
          return redirect()->intended('/');

        }else{


           $subscribed = subscriber::where('email', $email)->first();

           if ($subscribed ){
               $subscribed->subscribed = true;
               $subscribed->save();
           }else{
               $subscriber = new subscriber();
               $subscriber->email = $email;

               $subscriber->save();
           }

          
           flash()->('You have been subscribed successfully. Please check your e-mail for confirmation.', 'Thank you for your subscription!');
           return redirect()->intended('/');


       }


       }
	   
	public function valid_email($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            list($user, $domain ) = explode( '@', $email );
            if(checkdnsrr( $domain, 'mx')) {

            return true;
            };
        }else{
            return false;
        }
    }
}
