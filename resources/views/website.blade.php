
@extends('layouts.app')


@section('content')


	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>Alhamad Society</b></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li> <a href="{{route('show.website')}}">Complains</a></li>
      
    </ul>
  </div>
  <br> <br> <br>
<div><h1 style="color: red"><b>Complained Form</b></h1>
                    
                    <div>
                      <input class="form-control" type="text" name="names" placeholder="Your Name" id="name"><br>
                      <input class="form-control" type="text" name="homesno" placeholder="Your Home NO" id="homeno"><br>
                         <font color="red">Write your complain here</font>
                        <textarea class="form-control" rows="2" name="complainss" id="complains"></textarea>
                        <button class="btn btn-primary" id="btn">save</button>
                    </div>
                  
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/contacts.js')}}"></script>
<script type="text/javascript">
  var token='{{Session::token()}}';
  var save='{{route('save.website')}}';
</script>

<div>
  @yield('complain')
</div>
@endsection
