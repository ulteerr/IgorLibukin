@extends('en.layout')
@section('title')Order
@endsection
@section('js')
@endsection
@section('main_content')
    <div class="order">
        <a class="sub" href="{{route('order.multi-page')}}">Multi-page</a>
        <a class="sub" href="#">Landing page</a>
        <a class="sub" href="#">Improvements</a>
    </div>
@endsection
