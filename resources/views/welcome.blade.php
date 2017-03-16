@extends('layouts.master')

@section('title')
  Sign Up For Better Health
@endsection

@section('content')
    {{--validation for signup  --}}
    @if(count($errors) > 0 )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <ul>
                @foreach($errors-> all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
            </ul>
        </div>

    @endif
    <style>
        .jumbotron {
            background-color: #F0F8FF; /* Grey */
            color: #000080;
        }
    </style>
    <div class="jumbotron">
        <div style="background:transparent !important; "class="container">
        <h1>Welcome to the Sign Up page. </h1>
        <p> Registering to this portal ensures us to keep your records chronologically.</p>
    </div>

    <div class="row">
        <div class="col-sm-3 col-md-6">
            <form action ="{{route ('signup')}}" method="post">

                <h3>Sign Up for Access </h3>

                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input type="text" class="form-control" name='username' id='username' placeholder="Username" aria-describedby="basic-addon1">
                </div>


                <div class="input-group">

                    <span class="input-group-addon" id="sizing-addon2">@example.com</span>
                    <input type="text" class="form-control" name='email' id='email' placeholder="Recipient's username" aria-describedby="basic-addon2">

                </div>

                <!--<div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    Enter a valid email address
                </div> -->

                <div class="form-group"></div>
                <label form="first_name">Please Enter your First name </label>
                <input class=form-control type="text" name="first_name" id="first_name">

                <div class="form-group"></div>
                <label form="last_name">Please Enter your Surname </label>
                <input class=form-control type="text" name="last_name" id="last_name">

                <div class="form-group"></div>
                <label form="password"></label>
                <input class=form-control type="password" name="password" id="password">

                <button type="submit" class="btn btn-success navbar-btn">Submit</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>

<div class="col-sm-3 col-md-6">
    <form action ="{{route ('signin')}}" method="post">
    <h3> Sign in </h3>
                <div class="form-group"></div>
                <label form="username">Username </label>
                <input class=form-control type="text" name="username" id="username">

                <div class="form-group"></div>
                <label form="password">Password</label>
                <input class=form-control type="password" placeholder="Password" name="password" id="password">

                <button type="submit" class="btn btn-default navbar-btn">Submit</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
        </div>
            </form>
        </div>
    </div>
@endsection

