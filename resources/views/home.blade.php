@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 hidden-xs hidden-sm bg-transparent py-4">
            <div class="">
                <div class="clearfix">
                    <div class="float-left">
                        <h4> <b>Chat list</b> </h4>
                    </div>
                    <div class="float-right">
                        <button class='btn btn-success'>New</button>
                    </div>
                </div>
            </div>
            <div class="py-2"></div>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    John Doe
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Jane Doe
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Foo
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 py-4">
            <div class="card">
                <h5 class="card-header">Chatting</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">New Chat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 hidden-xs py-4">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
                <h4 class="alert-heading">Well done!</h4>
                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </div>
            <div class="alert alert-primary" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
                <h4 class="alert-heading">Secure Webchat</h4>
                <p>
                    Intrinsicly re-engineer premier services through functional products. Rapidiously parallel task cooperative manufactured products after sticky systems. Intrinsicly transition innovative.
                </p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </div>
        </div>
    </div>
</div>
@endsection
