@extends('layouts.app')

@section('content')
    <link href="css/parallax.css" rel="stylesheet">

    <!-- First Parallax Section -->
    <div class="jumbotron jumbotron-fluid paral paralsec" style="padding:0;">
        @include('includes.slider')
    </div>

    <!-- Second Parallax Section -->
    <div class="jumbotron paral paralsec1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/animal-5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Card content</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/animal-5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Card content</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/animal-5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Card content</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Third Parallax Section -->
    <div class="jumbotron paral paralsec2">
        <h1 class="display-3">Here is a heading 3</h1>
        <p class="lead">Here is a short description 2</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg btn-md" href="themes.html" role="button">Here is a button 3</a>
        </p>
    </div>
            
    <!-- Add More Parallax Sections Here -->

    <!-- Footer Section -->
    <footer class="wn-footer">
        <p>This is a Bootstrap 4 parallax page with jumbotron created by <a href="https://www.webnots.com/">WebNots Web Consulting Services</a>
        </p>
        <p><a href="#">Back to top</a></p>
    </footer>
@endsection

@section('dashboard')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
