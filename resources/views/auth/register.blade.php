@extends('auth.layouts')

@section('title','Sign up')

@section('content')
<div class="register-form">
    <form action="{{ route('regist') }}" method="post">

        <!-- Validation -->

        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="name" class="form-control is-invalid" id="Name" placeholder="Your name" value="" required>
            <div class="invalid-feedback">Name already taken by another account</div>
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-success btn-block">Sign me up!</button>
        <div class="clearfix">
            <label class="float-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>
        
        {{ csrf_field() }}
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>
@endsection()
