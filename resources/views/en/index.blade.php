@extends('en.layout')
@section('title')Home
@endsection
@section('main_content')
    <div class="intro">
        <h1>Hello!</h1>
        <h2>I am Igor</h2>
        <a class="get" href="{{route('contacts.index')}}">Get in touch</a>
        <a class="sub" href="#">Read summary</a>
    </div>
    <div class="pictures">
        <img class="comp" src="{{ asset('img/123.svg') }}" alt="developer">
    </div>

@endsection
