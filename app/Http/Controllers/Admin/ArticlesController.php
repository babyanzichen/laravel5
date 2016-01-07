<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Article;

use Redirect, Input, Auth;

class ArticlesController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.articles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{  // $rules = array(
		//'title' 	=> 'required|min:3|max:128',
		//'file' => 'mimes:jpg,gif,png'	
		//);
		$this->validate($request, [
			'title' => 'required|unique:articles|max:255',
			//'file' => 'required',
			'author' => 'required',
			'summary'=>'required',
			'body' => 'required',
		]);

		$article = new Article;
		//$article->picture ="";
		$article->title = Input::get('title');
		$article->author = Input::get('author');
		$article->summary = Input::get('summary');
		$article->body = Input::get('body');
		$article->user_id = Auth::user()->id;
		//$article->file = Input::file('file');
       // $ext = $file->guessClientExtension();
		//	$filename = $file->getClientOriginalName();
		//	$file->move(public_path().'/data', md5(date('YmdHis').$filename).'.'.$ext);
		//	$pictrue = md5(date('YmdHis').$filename).'.'.$ext;
		

		if ($article->save()) {
			return Redirect::to('admin');
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败！');
		}

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.articles.edit')->withArticle(Article::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$this->validate($request, [
			'title' => 'required|unique:articles,title,'.$id.'|max:255',
			'author' => 'required',
			'summary'=>'required',
			'body' => 'required',
		]);

		$article =Article::find($id);
		$article->title = Input::get('title');
		$article->author = Input::get('author');
		$article->summary = Input::get('summary');
		$article->body = Input::get('body');
		$article->user_id = Auth::user()->id;

		if ($article->save()) {
			return Redirect::to('admin');
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败！');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$article = Article::find($id);
		$article->delete();

		return Redirect::to('admin');
	}

}
