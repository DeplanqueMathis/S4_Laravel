@extends("general.template")
@section("content")
<h1>Postez votre musique</h1>

@include("partielle._error")

<form method="post" action="/songs" enctype="multipart/form-data">
        @csrf
        <input type="file" name="song">
        <br/>
        <input type="text" name='title' placeholder="Titre de ta photo" value="{{old('title')}}"/>
        <br />
        <input type="text" name='description' placeholder="Description de ton image" value="{{old('description')}}"/>
        <br />
        <input type="submit"/>

</form>


@endsection