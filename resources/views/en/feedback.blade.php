@extends('en.layout')
@section('title')FeedBack
@endsection
@section('js')
    <script src="{{ asset('js/feedback.js') }}" defer></script>
@endsection
@section('main_content')
    <div class="start">
        <div class="burger"></div>
        <p>Menu</p>
    </div>
    <div class="feedback">
        <div class="nav">
            <img class="backimg" src="img/2.svg" alt="">
            <div class="menu">
                @include('en.block.nav')
            </div>
        </div>
        <div class="contact">
            @include('en.block.contact')
        </div>
        <div class="form">
            @include('en.block.form')
        </div>
    </div>
@endsection
