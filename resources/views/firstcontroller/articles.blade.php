@extends("general.template")
@section("content")
<h1>Voici la liste des articles</h1>

<ul>
	@foreach($articles as $id => $valeur)
		<li><a href="/article/{{$id}}">{{$valeur}}</a></li>
	@endforeach
</ul>
@endsection