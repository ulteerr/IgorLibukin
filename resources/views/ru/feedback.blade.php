@extends('ru.layout')
@section('title')Контакты
@endsection
@section('main_content')
    <div class="feedback">
        <div class="contact">
            @include('ru.block.contact')
        </div>
        <div class="form">
            @include('ru.block.form')
        </div>
    </div>
@endsection
