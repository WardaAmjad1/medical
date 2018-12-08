<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
class WebsiteController extends Controller
{
	public function website($value='')
{
	return view('website');
	# code...
}
public function save(request $req)
{
$name=$_POST['name'];
$homeno=$_POST['homeno'];
$complains=$_POST['complain'];
$object =new Website();
$object->name=$name;
$object->homeNo=$homeno;
$object->order=$complains;
$object->save();
return response('successfuly data save');
}
public function show()
{ 
	$allcomplains=Website::all();
	return view('complain')->withshow($allcomplains);
	# code...
}
    //
}
