@extends('ru.layout')
@section('title')Главная@endsection
@section('main_content')
    <div class="navigation">
        <div class="container">
            <div class="content">
                <div class="nav">
                    <img class="backimg" src="img/2.svg" alt="">
                    <ul>
                        <div>
                            <div class="li_line"></div>
                            <div class="block_li">
                                <li><a class="nav__link" href="#">Работы</a></li>
                            </div>
                        </div>

                        <div>
                            <div class="li_line"></div>
                            <div class="block_li">
                                <li><a class="nav__link" href="#">Обо мне</a></li>
                            </div>
                        </div>
                        <div>
                            <div class="li_line"></div>
                            <div class="block_li">
                                <li><a class="nav__link" href="#">Резюме</a></li>
                            </div>
                        </div>


                        <div>
                            <div class="li_line"></div>
                            <div class="block_li">
                                <li><a class="nav__link" href="{{route('blog')}}">Блог</a></li>
                            </div>
                        </div>

                        <div>
                            <div class="li_line"></div>
                            <div class="block_li">
                                <li><a class="nav__link" href="{{route('feedback.index')}}">Заказать</a></li>
                            </div>
                        </div>


                    </ul>
                </div>
                <div class="intro">
                    <h1>Привет!</h1>
                    <h2>Я Игорь</h2>
                    <button class="get">Связаться со мной</button>
                    <button class="read">Посмотреть резюме</button>
                </div>
                <div class="pictures">
                    <img class="css" src="{{ asset('img/CSS.svg') }}" alt="CSS">
                    <img class="html" src="{{ asset('img/HTML.svg') }}" alt="HTML">
                    <img class="js" src="{{ asset('img/JS.svg') }}" alt="JS">
                    <img class="sql" src="{{ asset('img/SQL.svg') }}" alt="SQL">
                    <img class="cms" src="{{ asset('img/CMS.svg') }}" alt="CMS">
                    <img class="php" src="{{ asset('img/PHP.svg') }}" alt="PHP">
                    <img class="comp" src="{{ asset('img/Image.svg') }}" alt="developer">
                    <img class="backimg" src="{{ asset('img/1.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
