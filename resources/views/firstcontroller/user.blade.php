@extends("general.template")
@section("content")
<h1>Bienvenu chez {{$user->name}}</h1>

Suivi par : {{$user->TheyLikeMe()->count()}} personnes <br/>
Suis : {{$user->ILikeThem()->count()}} personnes <br/>
@auth
        @if(Auth::id() != $user->id)
            @if(Auth::user()->ILikeThem->contains($user->id))
                <a href="/changeLike/{{$user->id}}">Suivi par moi</a>
            @else
                <a href="/changeLike/{{$user->id}}">Pas du tout suivi par moi</a>
            @endif
        @endif
@endauth

Propriétaire de {{$user->songs()->count()}} chansons : <br/>

@include("partielle._song", ["songs" => $user->songs])

@endsection