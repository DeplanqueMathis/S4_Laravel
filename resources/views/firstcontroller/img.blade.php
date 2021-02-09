@extends("general.template")
@section("content")
{{$img->title}}<br/>

<img id="img-page-img" src="{{$img->url}}">

@endsection