@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Posts</div>

                <div class="panel-body">
                
@foreach($showpost as $data)
                 <div>
                  <h4>{{$data->name}}</h4> <p>{{$data->created_at}}</p> by <p>{{$data->userName->name}}</p> <p>
                  <a href="{{route('post.delete',$data->id)}}"><button class="btn btn-danger">Delete</button></a> 
                  <a href="{{route('post.edit',$data->id)}}"><button class="btn btn-primary">edit</button></a>  
                  </p>
                  <br>
                   <p>{{$data->description}}</p>
                   <form action="{{route('save.comment')}}" method="Get">
                     {{csrf_field()}}
                    <textarea class="form-control" row="2" placeholder="write a comment" name="blogcom">
                       
                     </textarea>
                   
                  <button >Reply</button>
                  <input type="hidden" name="post_id" value="{{$data->id}}" ></form>
                 </div> 
              comment

              @foreach($comments as $com)

              @if($com->post_id==$data->id)
                 <div style="    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
    margin-right: 185px;" >
  <p>{{$com->comment}}</p>
  <span class="time-right">{{$com->created_at}}</span>

</div>
@endif
    @endforeach             
<hr>
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection