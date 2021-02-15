@extends("general.template")
@section("content")
<h1>Recherche</h1>

<h4>Vous cherchez quelque chose en {{$search}} ?</h4>
Utilisateurs :
<ul>
    @foreach($users as $user)
        <li><a href="/user/{{$user->id}}">{{$user->name}}</a></li>
    @endforeach
</ul>

Images :

@include("partielle._song")

@endsection