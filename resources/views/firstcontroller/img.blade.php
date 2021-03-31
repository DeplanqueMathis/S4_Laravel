@extends("general.template")
@section("content")
<h1 id="img-title">{{$img->title}}</h1>

<img id="img-page-img" src="{{$img->url}}"><br/>
<div id="desc">
    @if(Auth::id() != $img->user->id)
        @if($img->LikeImg->contains(Auth::id()))
            <a class="like" href="/jaime/{{$img->id}}">{{$img->votes}}<span class="material-icons">favorite</span></a>
        @else
            <a class="like" href="/jaime/{{$img->id}}">{{$img->votes}}<span class="material-icons">favorite_border</span></a>
        @endif
    @else
        <p class="like">{{$img->votes}}<span class="material-icons">favorite</span></p>
    @endif

    <p class="desc">{{$img->description}}</p><br/>

    <p>Cette image a été posté par : <a class="user-link" href="/user/{{$img->user->id}}">{{$img->user->name}}</a></p>
    @if(Auth::id() == $img->user->id)
        <a class="like" href="/delete/{{$img->id}}">DELETE</a>
    @endif
</div>

@endsection