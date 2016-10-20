@extends('layouts.app')

@section('content')

    <div style="" class="intro-container">
        <h1 class="home-title"><span class=" box">What do we do?</span></h1>
        <p class="home-text box"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus facilisis justo tincidunt hendrerit. Ut cursus turpis sed justo euismod, sit amet euismod leo imperdiet. Morbi vel metus faucibus, elementum quam ut, imperdiet nisi. Suspendisse ac suscipit tellus, non scelerisque nibh. Proin malesuada commodo rutrum.</span></p>
        <img class="header-img" src="{{ URL::asset('img/controller.jpg') }}">
    </div>

    <div class="container">
    
        <div class="row row-center">
        @if (!Auth::guest())
            <a href="account/{{ Auth::user()->id }}/addGame">
        @else
            <a href="{{ url('/register') }}">
        @endif
            <div class="col-md-2 link col-center">
                    <h2>Add a game</h2><br>
                    <i class="fa fa-plus-square info-icon" aria-hidden="true"></i>
            </div>
            </a>
        
            <a href="{{ url('/register') }}">
            <div class="col-md-2 link col-center">
                    <h2>Register</h2><br>
                    <i class="fa fa-user-plus info-icon" aria-hidden="true"></i>
            </div>
            </a>
            <a href="{{ url('/browse') }}">
            <div class="col-md-2 link col-center">
                    <h2>Browse</h2><br>
                    <i class="fa fa-search info-icon" aria-hidden="true"></i>
            </div>
            </a>
            <div class="col-md-2 link col-center">
                    <h2>Contact</h2><br>
                    <i class="fa fa-envelope info-icon" aria-hidden="true"></i>
            </div>
        </div>

    </div>

@endsection