@extends("general.template")
@section("content")
<h1>Bienvenu chez {{$user->name}}</h1>

<div>
<p class="followed">Suivi par : {{$user->TheyLikeMe()->count()}} personnes <br/></p>
<p class="follow">Suis : {{$user->ILikeThem()->count()}} personnes <br/></p>
@auth
        @if(Auth::id() != $user->id)
            @if(Auth::user()->ILikeThem->contains($user->id))
                <a class="follow_button" href="/changeLike/{{$user->id}}">Tu suis ce BG</a>
            @else
                <a class="follow_button" href="/changeLike/{{$user->id}}">Genre tu follow pas ce BG ?</a>
            @endif
        @endif
@endauth

<p class="follow">Propriétaire de {{$user->songs()->count()}} images : <br/></p>
</div>
@include("partielle._song", ["songs" => $user->songs])

@endsection