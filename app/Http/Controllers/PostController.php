<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\comments;
use Auth;
class PostController extends Controller
{
      public function create()
    {
        return view('post');
        # code...
    }
    public function save(Request $request){
$id=Auth::User()->id;

$name=$request->blogname;
$description=$request->blogdescription;

$obj=new Post();

$obj->name=$name;
$obj->description=$description;
$obj->user_id=$id;
$obj->save();

return back();



}

public function show(){

$alldata=Post::all();

$comment=comments::all();


	return view('show')->withshowpost($alldata)->withcomments($comment);

}
public function edit($id)
{
   $obj=Post::where('id',$id)->first();
   //dd($obj);
   return view('editpost')->withdata($obj);

	# code...
}
public function update($id,Request $request){
//dd($id);
	$obj=Post::where('id',$id)->first();

	$uname=$request->blogname;
	$udescription=$request->blogdescription;
	//dd($udescription);
	$obj->name=$uname;
	$obj->description=$udescription;
	$obj->update();
	return back();

}

public function delete($id){

$obj=Post::where('id',$id)->first();

//dd($obj);
$obj->delete();
return back();
}
//function to comment

}
