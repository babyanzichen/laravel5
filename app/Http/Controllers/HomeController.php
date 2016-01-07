<?php namespace App\Http\Controllers;

use App\Article;
use App\Mood;
use App\Leave;

class HomeController extends Controller {

	public function index()
	{
    // return view('home')->withArticles(Article::take(5)->orderBy('created_at','desc')->get());
	 return view('home',['articles'=>article::take(5)->orderBy('created_at','desc')->get(),'moods'=>mood::take(5)->orderBy('created_at','desc')->get(),'leaves'=>leave::take(5)->orderBy('created_at','desc')->get()]);
    // return view('home',['pages'=>page::all(),'moods'=>mood::all(),'leaves'=>leave::all()]);   
	}
   
}

