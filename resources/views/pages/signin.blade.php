@extends('layouts.master')

@section('title')
    Login for a better health
@endsection

@section('content')
    <style>
        .jumbotron {
            background-color: #F0F8FF; /* Grey */
            color: #000080;
        }
    </style>
    <div class="jumbotron">

        <div style="background:transparent !important; "class="container">
            <h1>Prevention starts with you </h1>
            <p> Tailor Made Decision Design</p>
        </div>


            <div class="col-12 col-md-auto">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                <div class="form-group"></div>
                <input class=form-control placeholder="password" aria-describedby="basic-addon1" type="password" name="password" id="password">

                <button type="submit" class="btn btn-success navbar-btn">Submit</button>
            </div>
            </form>
        </div>
    </div>
@endsection

