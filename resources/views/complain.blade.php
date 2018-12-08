@extends('website')

@section('complain')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Complains</div>

                <div class="panel-body">
                
@foreach($show as $dataa)
                 <div>
                  <h1>{{$dataa->id}}</h1>
                  <h4>{{$dataa->order}}</h4> <p>{{$dataa->created_at}}</p> <p>
                  
                  <br>
                   


                 </div> 
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection