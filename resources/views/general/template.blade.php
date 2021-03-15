<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IMPOST style</title>
<link rel='stylesheet' type='text/css' href='/css/style.css' />
<link rel='stylesheet' type='text/css' href='/css/toastr.css' />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="/js/jquery.js"></script>
<script src="/js/jquery.pjax.js"></script>
<script src="/js/toastr.min.js"></script>
</head>

<body>
	<header>
		<a id="logo" href="/"><img id="logo-img" src="/images/logo2.png"></a>
        <form id="search" method="get" action="search">
            <input type="text" name="name" id="champtext" placeholder="Rechercher">
            <input type="submit" value="Go">
        </form>
	</header>
		<nav>
			<ul class="liste-une">
				<li class="un">
                    <a href="/" class="home">
                    Home
                    <div class="hover">
                    </div>
                    </a>
                </li>
				<li class="deux">
                    <a href="/about" class="about">
                    About
                    <div class="hover">
                    </div>
                    </a>
                </li>
				<li class="trois">
                    <a href="/articles" class="articles">
                    Articles
                    <div class="hover">
                    </div>
                    </a>
                </li>
            </ul>
            <ul class="liste-deux">
				@guest
                            @if (Route::has('login'))
                                <li class="nav-item un">
                                    <a class="nav-link login" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                        <div class="hover">
                                        </div>
                                    </a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item deux">
                                    <a class="nav-link register" href="{{ route('register') }}">
                                        {{ __('Register') }}
                                        <div class="hover">
                                        </div>
                                    </a>
                                </li>
                            @endif
                        @else
							<li class="un">
                                <a href="/songs/create" class="poster">
                                Poster
                                <div class="hover">
                                </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown deux">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle profil" href="/user/{{Auth::user()->id}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <div class="hover">
                                    </div>
                                </a>
							</li>
							<li class="trois">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <div class="hover">
                                        </div>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
			</ul>
		</nav>
	<div id="after-header">
        <img id="img" src="">
    </div>
    <div id="background-img1" class="background-img">
        <img src="/images/eye.jpg">
        <div class="back-back">
        </div>
    </div>
    <div id="background-img2" class="background-img">
        <img src="/images/psycho-eye.jpg">
        <div class="back-back">
        </div>
    </div>
    <div id="background-img3" class="background-img">
        <img src="/images/japanese-aesthetic.jpg">
        <div class="back-back">
        </div>
    </div>
    <div id="background-img4" class="background-img">
        <img src="/images/200.gif">
        <div class="back-back">
        </div>
    </div>
    <div id="background-img5" class="background-img">
        <img src="/images/tenor.gif">
        <div class="back-back">
        </div>
    </div>
    <div id="background-img6" class="background-img">
        <img src="/images/original.jpg">
        <div class="back-back">
        </div>
    </div>
    <div id="background-img7" class="background-img">
        <img src="/images/vaporwave.jpg">
        <div class="back-back">
        </div>
    </div>
    <div id="pjax-container">
	    @yield('content')
        @if(Session::has("toastr"))
        <script>
            toastr.{{Session::get('toastr')['status']}}('{{Session::get('toastr')['message']}}')
        </script>
        @endif
    </div>
</body>
<script src="/js/divers.js"></script>
<script src="/js/scroll.js"></script>
</html>