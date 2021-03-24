<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>@section('title')Home @show</title>
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
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
                    </div>
                </div>
            </nav>
        </div>
        <header class="center header">
            <div class="header__name"><a class="header__link" href="/index">НОВОСТНОЙ ПОРТАЛ</a></div>
        </header>
        <nav class="center mainmenu">
            <ul class="mainmenu__list">
                @forelse($categories as $key=>$value)
                    <li><a class="mainmenu__link" href="{{ route('category', ['category' => $value->id]) }}">{{ $value->title }}</a></li>
                @empty
                    <p>Нет категорий</p>
                @endforelse
            </ul>
        </nav>
        <nav class="center mainmenu">
            <ul class="mainmenu__list">
                <li><a class="mainmenu__link" href="{{ route('getDataForm') }}">Форма запроса на получение выгрузки данных</a></li>
                <li><a class="mainmenu__link" href="{{ route('allNews') }}">Управление новостями</a></li>
                <li><a class="mainmenu__link" href="{{ route('updateProfile') }}">Изменить данные пользователя</a></li>
                <li><a class="mainmenu__link" href="{{ route('parser') }}">Парсер</a></li>
                <li><a class="mainmenu__link" href="{{ route('loginVK') }}">Авторизоваться через ВК</a></li>
            </ul>
        </nav>
        <section class="center content">
            @section('content')
                <h1 class="content__head">Страница приветствия</h1>
                <p class="content__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque consequatur consequuntur dicta dolor explicabo, facilis fugiat impedit inventore iste iusto magnam magni maxime minima molestias nam, nihil nisi nulla officiis optio perspiciatis provident quae quaerat quasi, quisquam ratione reiciendis reprehenderit similique tempore tenetur totam vel veritatis voluptatibus. Aliquid animi aperiam asperiores autem deleniti dolorem doloribus id incidunt, ipsum, laudantium magnam, nemo nisi porro reprehenderit rerum sed sequi sunt tempora vel voluptatibus. Eveniet explicabo fugit repellat. Deserunt earum illum repellat voluptatem. Accusantium adipisci aperiam asperiores assumenda corporis cupiditate dolores eligendi eum exercitationem, id illum iure libero magni modi molestias quod, sit voluptatibus! Accusamus animi architecto autem eum incidunt nihil voluptate voluptates? A asperiores dolorem et excepturi incidunt, ipsum labore nam recusandae! Cum cupiditate dolor dolores, eius eligendi id itaque magnam molestiae nam nisi officia quam quasi quod sequi similique ullam voluptates. Aliquam aut autem cupiditate, debitis distinctio doloribus eligendi esse inventore iste labore laborum nihil nisi nostrum quaerat voluptate. Animi aperiam aspernatur, consequuntur cum hic labore maiores minima minus mollitia nam nihil odio odit quae quaerat quasi quod quos sequi sint suscipit veniam voluptate voluptatem voluptates voluptatum. Aliquam consequatur enim illum quidem saepe sequi voluptate? Ab accusantium adipisci alias aperiam blanditiis consequatur consequuntur cupiditate doloremque dolorum esse eum, excepturi exercitationem iusto magni minima molestiae natus nihil nobis nostrum numquam officiis pariatur praesentium quia, quod tempora unde voluptatum. A, aliquid aut dolorem doloremque eos fugit ipsam itaque magni minima neque nesciunt non nulla officia perspiciatis possimus qui ratione sunt unde veritatis voluptas. Deleniti et nemo nobis omnis qui quibusdam, quo! Corporis dolorum hic recusandae saepe sit suscipit totam. Accusantium consequatur dicta earum ipsa laborum nemo nihil non quos rem? Aliquid aperiam blanditiis consequatur ducimus eaque hic impedit laboriosam laborum, nihil omnis sequi totam ut. Esse eveniet exercitationem explicabo similique veniam voluptas?</p>
            @show
        </section>
        <footer class="footer">
            <div class="footer__content center">
                <p class="footer__copyright"><i class="far fa-copyright"></i> {{date('Y')}} Новостной портал. Все права защищены.</p>
                <div class="footer__links">
                    <a class="footer__link"><i class="fab fa-facebook-f"></i></a>
                    <a class="footer__link"><i class="fab fa-twitter"></i></a>
                    <a class="footer__link"><i class="fab fa-linkedin-in"></i></a>
                    <a class="footer__link"><i class="fab fa-google-plus-g"></i></a>
                </div>
            </div>
        </footer>
        <script src="https://kit.fontawesome.com/9405381f8b.js" crossorigin="anonymous"></script>
    </body>
</html>
