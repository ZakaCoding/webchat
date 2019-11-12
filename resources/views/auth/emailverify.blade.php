@extends('auth.layouts')

@section('title','Email Confirmation')

@section('content')
<div class="wrapper">
    <div class="wrapper-head">
        <h1 class="text-center center">Welcome to ChitChat!</h1>
    </div>
    <div class="content">
        @if(\Session::has('success'))
            <div class="desc">
                <div class="container w-300">
                    <img class="motion-image" src="{{ asset('image/motion.png') }}" alt="" srcset="">
                    <strong class="title">Hi {{ $name }},</strong>
                    <p class="text-justify">
                        Thanks for registering an account with ChitChat! You're coolest person
                        in all the world (and i've met a lot of really cool people). <br>
                        <br> Finally yay! {{ Session::get('success') }}
                    </p>
                    <a class="btn btn-success btn-block" href="{{ route('login') }}">Sign me in!</a>
                </div>
                <!-- Fun fact -->
            </div>
        @endif

        @if(\Session::has('failed'))
            <div class="desc">
                <div class="container w-300">
                    <img class="motion-image" src="{{ asset('image/motion.png') }}" alt="" srcset="">
                    <p class="text-justify">
                        <h2>Hmmm... Something went worng</h2>
                    </p>
                </div>
                <!-- Fun fact -->
            </div>
        @endif
    </div>
</div>
<br>
<footer class="text-center">
    Copyright &copy; 2019 Developer Team Webchat.
    <br>Malang, East Java, Indonesia.
</footer>
@endsection