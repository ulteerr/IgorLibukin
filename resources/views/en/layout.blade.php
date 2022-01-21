<!doctype html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link rel="icon" href="">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('js')
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="user">
                <div class="user__avatar">
                    <a href="{{route('index')}}"><img class="logo" src="{{ asset('img/logo.svg') }}" alt="logo"></a>
                </div>
                <div class="user__content">
                    <div class="user__name">Igor Libukin</div>
                    <div class="user__prof">Developer</div>
                </div>
            </div>
            <div class="contact">
                <div class="social">
                    <a class="social__link phone" href="tel:+79215761975"><img src="{{ asset('img/Phone.svg') }}"
                                                                               alt=""></a>
                    <a class="social__link telegram" href="https://t.me/igorlibukin"><img
                            src="{{ asset('img/Telegram.svg') }}" alt=""></a>
                    <a class="social__link whatsapp" href="https://wa.me/+79215761975"><img
                            src="{{ asset('img/WhatsApp.svg') }}" alt=""></a>
                    <a class="social__link linkedin"
                       href="https://linkedin.com/in/igorlibukin">
                        <img src="{{ asset('img/Linkedin.svg') }}" alt=""></a>
                    <a class="social__link github" href="https://github.com/ulteerr/"><img
                            src="{{ asset('img/Github.svg') }}" alt=""></a>
                    <a class="social__link mail" href="mailto:example@gmail.com"><img src="{{ asset('img/Mail.svg') }}"
                                                                                      alt=""></a>
                </div>
                <div class="language">
                    <a href="/ru" class="ru"><p>Ru</p></a>
                    <a href="/en" class="eng"><p>Eng</p></a>
                </div>
                <div class="button">
                        <a class="btn" href="{{route('feedback.index')}}">Get in touch</a>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </div>
</header>
@yield('main_content')
</body>
</html>

