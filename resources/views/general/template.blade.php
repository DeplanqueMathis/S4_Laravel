<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IMPOST style</title>
<link rel='stylesheet' type='text/css' href='/css/style.css' />
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
	<header>
		<a id="logo" href="/"><img src="/images/logo1.png"></a>
		<nav>
			<ul>
				<li class="un"><a href="/" class="home">Home</a></li>
				<li class="deux"><a href="/about" class="about">About</a></li>
				<li class="trois"><a href="/articles" class="articles">Articles</a></li>
				@guest
                            @if (Route::has('login'))
                                <li class="nav-item un">
                                    <a class="nav-link login" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item deux">
                                    <a class="nav-link register" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
							<li class="un"><a href="/songs/create" class="poster">Poster</a></li>
                            <li class="nav-item dropdown deux">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle profil" href="/user/{{Auth::user()->id}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
							</li>
							<li class="trois">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
			</ul>
		</nav>
	</header>
	<div id="after-header">
        <img id="img" src="">
    </div>
	@yield('content')
</body>
<script src="/js/jquery.js"></script>
<script src="/js/divers.js"></script>
<script src="/js/scroll.js"></script>
</html>