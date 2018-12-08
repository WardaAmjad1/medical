<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
	public function newscreate()
{
	return view('news');
	# code...
}
public function store(request $request)
{
	
	$description=$request->newsdescription;
	$objs=new News();


$objs->description=$description;
	$objs->save();
	return back();
	# code...
}
public function shownews($value='')
{
	$allnews=News::all();
	return view ('shownews')->withshonews($allnews);
	# code...
}

    //
}