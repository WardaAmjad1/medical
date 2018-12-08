@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All News</div>

                <div class="panel-body">
                
@foreach($shonews as $news)
<div>
  <h4>{{$news->description}}</h4>
  <p>{{$news->created_at}}</p>
</div>
                 
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection