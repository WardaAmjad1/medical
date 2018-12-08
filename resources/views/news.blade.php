@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create News</div>


                <div class="panel-body">
                    <form action="{{route('news.store')}}" method="post">
                        {{csrf_field()}}
                    <div>
                        <textarea class="form-control" rows="5" placeholder="Write Your News" name="newsdescription"></textarea>
                        <button class="btn btn-primary">save</button>
                    </div>
                    </form>
                 
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
