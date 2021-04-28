@extends('layouts.app')

@section('content')
<!-- First Parallax Section -->
    <div class="jumbotron paral paralsec">
        <h1 class="display-3">Here is a heading 1</h1>
        <p class="lead">Here is a short description 1</p>
        <p class="lead">
            <a class="btn btn-info btn-lg btn-md" href="#" role="button">Here is a button 1</a>
        </p>
    </div>

    <!-- Second Parallax Section -->
    <div class="jumbotron paral paralsec1">
        <h1 class="display-3">Here is a heading 2</h1>
        <p class="lead">Here is a short description 2</p>
        <p class="lead">
            <a class="btn btn-warning btn-lg btn-md" href="widgets.html" role="button">Here is a button 2</a>
        </p>
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
