@extends('auth.layouts')

@section('title','Login Webchat')

@section('content')
<div class="register-form">
    <form action="{{ route('login') }}" method="post" novalidate>
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
            <?php
                if($errors->has('email'))
                {
                    $message = $errors->first('email');
                    $errno = 'is-invalid';
                }
            ?>
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name='email' class="form-control {{ $errno }}" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="Enter email">
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
            <input type="password" name="password" id="pwdInput" class="form-control {{ $errno }}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[0-9]).{0,}" aria-describedby="passwordlHelp" placeholder="Password">
            <div class="invalid-feedback">{{ $message }}</div>
        </div>
        <div class="clearfix">
            <label class="float-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>
        <button type="submit" class="btn btn-success btn-block">Login</button>
        
        {{ csrf_field() }}
    </form>
    <!-- <p class="text-center"><a href="#">Create an Account</a></p> -->

    <!-- Return response create account -->
    @if(\Session::has('failed'))
        <div class="alert alert-danger">
            {{ Session::get('failed') }}
        </div>
    @endif
</div>
@endsection
