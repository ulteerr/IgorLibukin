@extends('en.layout')
@section('title')Home
@endsection
@section('main_content')
    <div class="navigation">
        <div class="container">
            <div class="content">
                @include ('en.block.nav')
                <div class="intro">
                    <h1>Hello!</h1>
                    <h2>I am Igor</h2>
                    <button class="get">Get in touch</button>
                    <button class="read">Read summary</button>
                </div>
                <div class="pictures">
                    <img class="css" src="{{ asset('img/CSS.svg') }}" alt="CSS">
                    <img class="html" src="{{ asset('img/HTML.svg') }}" alt="HTML">
                    <img class="js" src="{{ asset('img/JS.svg') }}" alt="JS">
                    <img class="sql" src="{{ asset('img/SQL.svg') }}" alt="SQL">
                    <img class="cms" src="{{ asset('img/CMS.svg') }}" alt="CMS">
                    <img class="php" src="{{ asset('img/PHP.svg') }}" alt="PHP">
                    <img class="comp" src="{{ asset('img/Image.svg') }}" alt="developer">
                </div>
            </div>
        </div>
    </div>
@endsection
