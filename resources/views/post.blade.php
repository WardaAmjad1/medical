@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Your Post</div>

                <div class="panel-body">
                  <form action="{{route('post.save')}}" method="post" >
                    
                    {{csrf_field()}}
                    <div>
                      <input type="text" name="blogname" class="form-control" placeholder="blog name">
                    </div>
                    <br>
                   <div>
                       <textarea class="form-control" row="5" placeholder="write your post" name="blogdescription"></textarea>
                       <button class="btn btn-primary">save</button>
                   </div>
                   
              </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection