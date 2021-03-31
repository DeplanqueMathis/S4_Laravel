@extends("general.template")
@section("content")
<h1>Postez votre style !</h1>

@include("partielle._error")

<form method="post" class="card" action="/songs" enctype="multipart/form-data">
        @csrf
        <input type="file" name="song">
        <br/>
        <input type="text" class="form-control" name='title' placeholder="Titre de ta photo" value="{{old('title')}}"/>
        <br />
        <input type="text" class="form-control" name='description' placeholder="Description de ton image" value="{{old('description')}}"/>
        <br />
        <input class="btn-primary" type="submit"/>

</form>


@endsection