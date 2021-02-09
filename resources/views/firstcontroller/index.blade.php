@extends("general.template")
@section("content")
<?php
$rand = rand(1,4);
?>
@if($rand == 1)
    <h1>How are you bro ?!</h1>
@endif
@if($rand == 2)
    <h1>Welcome back {{ Auth::user()->name }} !</h1>
@endif
@if($rand == 3)
    <h1>Re {{ Auth::user()->name }} !</h1>
@endif
@if($rand == 4)
    <h1>T'étais où frérot ?</h1>
@endif

@include("partielle._song")

@endsection