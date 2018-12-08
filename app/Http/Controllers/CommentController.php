<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;
use Auth;
class CommentController extends Controller
{
	public function addcomment(Request $request)
{
	$comment=$request->blogcom;
	//dd($comment);
	$obj=new comments();
	$obj->comment=$comment;
	$obj->comment=$comment;
	$obj->post_id=$request->post_id;
	$obj->save();

return back();


	# code...
}
    //
}
