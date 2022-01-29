@extends('en.layout')
@section('title')Internet Shops
@endsection
@section('js')
    <script src="{{ asset('js/multiPage.js') }}" defer></script>
@endsection
@section('main_content')
    <div class="multipage">
        <div class="slider">
            <ul>
                <li><a href="#"><img src="https://ru.js.cx/carousel/1.png"></a></li>
                <li><a href="#"><img src="https://ru.js.cx/carousel/2.png"></a></li>
                <li><a href="#"><img src="https://ru.js.cx/carousel/3.png"></a></li>
                <li><a href="#"><img src="https://ru.js.cx/carousel/4.png"></a></li>
                <li><a href="#"><img src="https://ru.js.cx/carousel/7.png"></a></li>
            </ul>
        </div>
        <div class="text">
            <h3 class="title_text">I create multi-page sites on the laravel framework or various cms.
                I work with the highest quality and on time, taking into account the use in development.</h3>


            <p><b>Required to order:</b>
            To complete the order, describe your task in detail for review, files and access have been received.</p>

            <p><b>Development language:</b> PHP</p>
            <p><b>Framework PHP:</b> Laravel</p>
            <p><b>Framework JavaScript:</b> Vue</p>
            <p><b>CSS framework:</b> Without a framework, Bootstrap</p>
            <p><b>DB type:</b> MySQL, PostgreSQL, Redis</p>
            </h3>
        </div>
    </div>
@endsection
