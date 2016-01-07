<?php namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller {

  public function show($id)
  {
    return view('articles.show')->withArticle(Article::find($id));
  }
  public function listing()
	{ 
	  //$articles=Article::paginate(5);
	 // return view('articles.listing')->withArticles($articles);
	 return view('articles.listing')
	 ->withArticles(Article::take('all')
	 ->orderBy('created_at','desc')
	 ->paginate(5));
	}
   

}
