@extends('auth.layouts')

@section('title','Sign up')

@section('content')
<div class="register-form">
    <form action="{{ route('regist') }}" method="post" novalidate>
        <!-- Check error -->
        <?php
            $errno = '';
            $message = '';

            if($errors->has('name'))
            {
                $message = $errors->first('name');
                $errno = 'is-invalid';
            }
        ?>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="name" class="form-control {{ $errno }}" id="Name" placeholder="Your name" value="{{ old('name') }}">
            <div class="invalid-feedback">{{ $message }}</div>
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="form-group">
            <?php
                if($errors->has('email'))
                {
                    $message = $errors->first('email');
                    $errno = 'is-invalid';
                }
            ?>
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name='email' class="form-control {{ $errno }}" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div class="invalid-feedback">{{ $message }}</div>
        </div>
        <div class="form-group">
            <?php
                if($errors->has('password'))
                {
                    $message = $errors->first('password');
                    $errno = 'is-invalid';
                }
            ?>
            <label for="pwdInput">Password</label>
            <input type="password" name="password" id="pwdInput" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[0-9]).{0,}" aria-describedby="passwordlHelp" placeholder="Password">
            <small id="passwordlHelp" class="form-text text-muted">
              Make sure it's <span id="min-length">at least 8 characters</span>
              <span id="validate-number"> including a number</span> and a <span id="lowcase">lowercase letter.</span>
            </small>
            <div class="invalid-feedback">{{ $message }}</div>
        </div>
        <button type="submit" class="btn btn-success btn-block">Sign me up!</button>
        
        {{ csrf_field() }}
    </form>
    <p class="text-center"><a href="{{ route('login') }}">Create an Account</a></p>

    <!-- Return response create account -->
    @if(\Session::has('success'))
        <div class="alert alert-success animated shake">
            {{ Session::get('success') }}
        </div>

        <div class="clearfix">
            <span class="float-left">&#10230;</span>
            <a href="{{ route('login') }}" class='float-right'>Goto login page</a>
        </div>
    @endif

    @if(\Session::has('failed'))
        <div class="alert alert-danger">
            {{ Session::get('failed') }}
        </div>
    @endif
</div>
<!-- Javascript validation -->
<script src="{{ asset('js/register_validation.js') }}"></script>
@endsection()
