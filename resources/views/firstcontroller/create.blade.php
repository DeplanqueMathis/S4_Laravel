@extends("general.template")
@section("content")
<h1>Postez votre musique</h1>

@include("partielle._error")

<form method="post" action="/songs" enctype="multipart/form-data">
        @csrf
        <input type="file" name="song">
        <br/>
        <input type="text" name='title' placeholder="Title of the song" value="{{old('title')}}"/>
        <br />
        <input type="submit"/>

</form>


@endsection