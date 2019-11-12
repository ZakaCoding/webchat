@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 hidden-xs hidden-sm bg-transparent py-4">
            <div class="">
                <div class="clearfix">
                    <div class="float-left">
                        <h4 class="align-middle"> <b>Chat list</b> </h4>
                    </div>
                    <div class="float-right">
                        <button class='btn btn-success'>New</button>
                    </div>
                </div>
            </div>
            <div class="py-2"></div>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ url('home/c/John Doe') }}">John Doe</a>
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
            @if(isset($user))
                <div class="card">
                    <h5 class="card-header">{{ isset($user) ? $user : 'Chatting' }}</h5>
                    <div class="card-body">
                        <div class="chat">
                            <div class="clearfix">
                                <div class="chat-text chat-left float-left">
                                    <p>Hi, This example chat by john doe</p>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="chat-text chat-right float-right">
                                    <p>Hi, John whats up!</p>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="chat-text chat-left float-left">
                                    <p>Today i will visit your house</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <form action="" method="post" class="form-message">
                            <input type="text" name="message" class="chat-message" placeholder="Type your message...">
                            <button type="submit" class="btn-sent"><i class="fas fa-location-arrow text-center"></i></button>
                        </form>
                    </div>
                </div>
            @else
                <div class="card">
                    <h5 class="card-header">{{ isset($user) ? $user : 'Chatting' }}</h5>
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="chat-text chat-left float-left">
                                <p>Hi, This example chat by john doe</p>
                            </div><br>
                            <div class="chat-text chat-right float-right">
                                <p>Hi, John whats up!</p>
                            </div>
                            <br>
                            <div class="chat py-4">
                                <form action="" method="post">
                                    <input type="text" name="Message" placeholder="Enter you'r Message">
                                </form>
                            </div>
                        </div>
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">New Chat</a>
                    </div>
                </div>
            @endif
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
