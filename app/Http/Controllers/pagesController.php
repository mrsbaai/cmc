<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    
	Public function savecontact(){
		return "save";
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
