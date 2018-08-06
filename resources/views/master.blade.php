<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @hasSection('title')
            @yield('title')
        @else
            Мобильные рассылки
        @endif
    </title>
    <link rel="stylesheet" href="/bower_components/foundation-sites/css/foundation.css?v={{ rand(0,1000) }}" />
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>

<header>
    <div class="main-menu row">
        <div class="shrink column"><a href="/" class="logo"><img src="/img/logo.png" /></a></div>
        <div class="column">
            <nav>
                <a href="" class="active">Описание</a>
                <a href="">Почему мы</a>
                <a href="">Калькултор</a>
                <a href="">Вопросы</a>
                <a href="">Кейсы</a>
                <a href="">Контакты</a>
            </nav>
        </div>
    </div>
    <div class="content row">
        <div class="small-12 medium-8 column">
            <h2>Мобильные рассылки эффективно</h2>
            <sup></sup>
            <div class="content__text">
                99% пользователей не расстаются с телефоном 6 часов в день
            </div>
        </div>

    </div>
</header>

@yield('content')

<footer>
    <div class="row align-center">
        <div class="small-12 medium-8 column">
            <img src="img/logo.png" />
            <p>Цель создания судоходного канала — соединение бассейнов двух водоёмов в случае отсутствия такового, сокращение пути между двумя водоёмами.</p>
            <div class="address">
                <p>Москва</p>
                <p>8 800 000 00 00</p>
                <p>example@mail.ru</p>
            </div>
            2018 Все права защищены
        </div>
    </div>
</footer>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/what-input/dist/what-input.min.js"></script>
<script src="/bower_components/foundation-sites/dist/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>

</body>
</html>