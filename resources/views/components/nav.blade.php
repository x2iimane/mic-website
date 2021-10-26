<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">
            <img src="<?php echo url('/'); ?>/img/mic.png" width="150" class="d-inline-block align-middle mr-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icofont-navigation-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item {{ (Request::is('/') ? 'activated' : '') }}"><a class="nav-link" href="/">{{ trans('nav.home') }}</a></li>
                <li class="nav-item {{ (Request::is('partenaires') ? 'activated' : '') }} {{ (Request::is('partenaires/*') ? 'activated' : '') }}"><a class="nav-link" href="/partenaires">{{ __('nav.partners') }}</a></li>
                <li class="nav-item {{ (Request::is('realisations') ? 'activated' : '') }} {{ (Request::is('realisations/*') ? 'activated' : '') }}"><a class="nav-link" href="/realisations">{{ __('nav.realizations') }}</a></li>
                <li class="nav-item {{ (Request::is('actualites') ? 'activated' : '') }} {{ (Request::is('actualites/*') ? 'activated' : '') }}"><a class="nav-link" href="/actualites">{{ __('nav.news') }}</a></li>
                <li class="nav-item {{ (Request::is('productions') ? 'activated' : '') }} {{ (Request::is('productions/*') ? 'activated' : '') }}"><a class="nav-link" href="/productions">{{trans('Productions')}}</a></li>
                <li class="nav-item  {{ (Request::is('about') ? 'activated' : '') }}"><a class="nav-link" href="/about">{{ __('nav.about') }}</a></li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-4">
                <li class="nav-item">
                    <form action="/recherche" class="form-outline d-flex mt-2">
                        <input class="form-control" type="text" name="q" placeholder="{{ __('main.search') }}" size="25" @if(isset($searched_text)) value="{{$searched_text}} @endif">
                    </form>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item {{ (Request::is('login') ? 'activated' : '') }}">
                            <a class="nav-link" href="{{ route('login',app()->getLocale()) }}">
                               {{ __('main.partnerAccess')}}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarAccess" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->first_name }} {{ Auth::user()->last_name  }}</a>
                            <ul class="dropdown-menu mt-2" aria-labelledby="navbarAccess">
                                <li class="dropdown-submenu pr-4 pl-4 {{(Request::is('acces_partenaire/actualites') ? 'activated' : '')}}">
                                    <a class="dropdown-item" href="/acces_partenaire/actualites">{{trans('nav.news')}}</a>
                                </li>
                                <li class="dropdown-submenu pr-4 pl-4 {{(Request::is('acces_partenaire/productions') ? 'activated' : '')}}">
                                    <a class="dropdown-item" href="/acces_partenaire/productions">Productions</a>
                                </li>
                                @can('viewAny', Auth::user())
                                    <li class="dropdown-submenu pr-4 pl-4 {{(Request::is('acces_partenaire/users') ? 'activated' : '')}}">
                                        <a class="dropdown-item" href="/acces_partenaire/users">{{ __('nav.users')}}</a>
                                    </li>
                                    <li class="dropdown-submenu pr-4 pl-4 {{(Request::is('acces_partenaire/historiques') ? 'activated' : '')}}">
                                        <a class="dropdown-item" href="/acces_partenaire/historiques">{{ __('nav.history')}}</a>
                                    </li>
                                @endcan
                                <li class="dropdown-submenu pr-4 pl-4 {{(Request::is('profile') ? 'activated' : '')}}">
                                    <a class="dropdown-item" href="/profile">{{trans('nav.profile')}}</a>
                                </li>
                                <li class="dropdown-submenu pr-4 pl-4">
                                    <a class="dropdown-item"  href="{{ route('logout',app()->getLocale()) }}"
                                       onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                @endguest
                <li class="nav-item ">
{{--                    <a class="nav-link"  href="{{ route(Route::currentRouteName(),'fr') }}" role="button" aria-haspopup="true" aria-expanded="false">--}}
                    <a class="nav-link"    href="{{url('/lng/fr')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        FR
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/lng/en')}}"  role="button" aria-haspopup="true" aria-expanded="false">
                        EN
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
