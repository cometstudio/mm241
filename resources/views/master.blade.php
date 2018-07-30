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
            Default title
        @endif
    </title>
    <link rel="stylesheet" href="/bower_components/foundation-sites/css/foundation.css?v={{ rand(0,1000) }}" />
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>

<header>
    <div class="grid-container">
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
    </div>
    <div class="header__overlay">
        <div class="bg"></div>
        <div class="content">2sdfsdfasd</div>
    </div>
</header>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/what-input/dist/what-input.min.js"></script>
<script src="/bower_components/foundation-sites/dist/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>

</body>
</html>