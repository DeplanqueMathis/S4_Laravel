<ul id="liste-img">
    @foreach ($songs as $s)
        <li id='img-preview'>
            <a href="/img/{{$s->id}}" class="img" data-file="{{$s->url}}">
                {{$s->title}}
                <span>{{$s->votes}} <span class="material-icons">favorite</span></span>
            </a>
        <!--uploadé par <a href="/user/{{$s->user->id}}">{{$s->user->name}}</a>
        Aimé par {{$s->votes}} personnes -->
        </li>
    @endforeach
</ul>