<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Redirect, Input;

use App\Leave;
class LeavesController extends Controller {

  public function show($id)
  {
    return view('leaves.show')->withLeaves(Leave::find($id));
  }
  public function listing()
	{
     return view('leaves.listing')
	 ->withLeaves(leave::take('all')
	 ->orderBy('created_at','desc')
	 ->paginate(5));
	}
 public function store(Request $request)
	{
		$this->validate($request, [
			'nickname' => 'required|unique:leaves|max:255',
			'content' => 'required',
			
		]);

		$leave = new Leave;
		$leave->nickname = Input::get('name');
		$leave->content = Input::get('comment');
		

		if ($leave->save()) {
			return Redirect::to('home');
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败！');
		}

	}

}