<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $category['title'] }}</title>
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <header class="center header">
            <div class="header__name"><a class="header__link" href="/">НОВОСТНОЙ ПОРТАЛ</a></div>
        </header>
        <nav class="center mainmenu">
            <ul class="mainmenu__list">
                @foreach($categories as $key=>$value)
                    <li><a class="mainmenu__link" href="/category/{{ $key + 1 }}">{{ $value['title'] }}</a></li>
                @endforeach
            </ul>
        </nav>
        <section class="center content">
            <h1 class="content__head">{{ $category['title'] }}</h1>
            <p class="content__text">{{ $category['description'] }}</p>
            <section class="content__news">
                @foreach($news as $newsOne)
                    <div class="content__newsOne">
                        <h2 class="content__newsOneHead"><a href="/news/{{ $newsOne['id'] }}" class="content__newsOneLink">{{ $newsOne['head'] }}</a></h2>
                        <p class="content__newsOneText">{{ $newsOne['text'] }}</p>
                    </div>
                @endforeach
            </section>
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
