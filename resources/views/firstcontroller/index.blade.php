@extends("general.template")
@section("content")
@if(Auth::check())
    <?php $rand = rand(1,4);?>
@else
    <?php $rand = rand(1,2);?>
@endif

@if($rand == 1)
    <h1 id="annonce">How are you bro ?!</h1>
@endif
@if($rand == 4)
    <h1 id="annonce">Welcome back {{ Auth::user()->name }} !</h1>
@endif
@if($rand == 3)
    <h1 id="annonce">Re {{ Auth::user()->name }} !</h1>
@endif
@if($rand == 2)
    <h1 id="annonce">T'étais où frérot ?</h1>
@endif

@include("partielle._song")

@endsection