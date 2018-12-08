@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                 <a href="{{route('create.post')}}">
                    <button class="btn btn-primary btn-lg">
                        Create Post
                    </button>
                    </a>


                    <a href="{{route('show.post')}}">
                    <button class="btn btn-success btn-lg">
                        Show Post
                    </button>
                  

                    <br>
                    <br>
                    </a>
                    <a href="{{route('news.create')}}">
                        <button class="btn btn-primary btn-lg">
                            Create News
                        </button>
                    </a>
                     <a href="{{route('news.show')}}">
                        <button class="btn btn-success btn-lg">
                            Show News
                        </button>
                    </a>
                    <br><br>
                        </a>
                     <a href="{{route('view.website')}}">
                        <button class="btn btn-success btn-lg">
                         My Website
                        </button>
                    </a>
          
                     
        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
