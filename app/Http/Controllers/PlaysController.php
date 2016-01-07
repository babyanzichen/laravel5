<?php namespace App\Http\Controllers;

use App\Play;

class PlaysController extends Controller {

  public function show($id)
  {
    return view('plays.show')->withPlay(Play::find($id));
  }
  public function listing()
	{ 
	 // $plays=Play::paginate(10);
	  //return view('articles.listing')->withArticles($articles);
	 return view('plays.listing')
	 ->withPlays(Play::take('all')
	 ->orderBy('created_at','desc')
	 ->paginate(5));
	}
   
}
