@extends('en.layout')
@section('title')FeedBack
@endsection
@section('js')
    <script src="{{ asset('js/feedback.js') }}" defer></script>
@endsection
@section('main_content')
    <div class="contact">
        @include('en.feedback.block.contact')
    </div>
    <div class="form">
        @include('en.feedback.block.form')
    </div>
@endsection
