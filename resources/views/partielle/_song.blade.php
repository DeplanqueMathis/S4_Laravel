<ul>
    @foreach ($songs as $s)
        <li ><a href="#" class="song" data-file="{{$s->url}}">{{$s->title}}</a>
        uploadé par <a href="/user/{{$s->user->id}}">{{$s->user->name}}</a>
        Aimé par {{$s->votes}} personnes</li>
    @endforeach
</ul>