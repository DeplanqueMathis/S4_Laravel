@extends("general.template")
@section("content")
<h1>Recherche</h1>

<h4>Vous cherchez quelque chose en {{$search}} ?</h4>
<p class="follow">Utilisateurs :</p>
<ul class="article" style="margin-top:1rem">
    @foreach($users as $user)
        <li><a href="/user/{{$user->id}}">{{$user->name}}</a></li>
    @endforeach
</ul>

<p class="follow">Images :</p>

@include("partielle._song")

@endsection