@extends('layouts.app')

@section('customstyle')
<link rel="stylesheet" href="/css/custom.css">
<style>
.navbar-default {
    display: none;
}
li{
 list-style-type:none;
}
body {
    background-color: black;
}
</style>
@endsection

@section('content')
<div class="jumbotron" style="background-color:black">
<div class="col-md-12" style="background-color:black">
    <ul class="pic-section" style="background-color:black;border-color:navy;">
        <li>
	        @foreach ($imagepaths as $imagepath)
	            <img class="slides fadein" src="{{$imagepath}}">
	        @endforeach 

        </li> 
    </ul>
</div>
</div>


<script>
var myIndex = 0;

carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {location.reload(true)}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9750); // Change image every 10 seconds
}
</script>
@endsection
