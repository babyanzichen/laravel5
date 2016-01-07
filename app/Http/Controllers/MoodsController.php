<?php namespace App\Http\Controllers;

use App\Mood;

class MoodsController extends Controller {

  public function show($id)
  {
    return view('moods.show')->withMoods(Mood::find($id));
  }
  public function listing()
	{
     return view('moods.listing')
	 ->withMoods(Mood::take('all')
	 ->orderBy('created_at','desc')
	 ->paginate(5));
	}
   
}