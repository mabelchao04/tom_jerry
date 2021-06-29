@extends('layouts.app')

@section('content')
{{ Breadcrumbs::render('about') }}
<div class="container-fluid">
    <div class="row justify-content-center" style="margin-top:3.5rem;">
        <div class="col-md-8">
            <about></about>
        </div>
    </div>
</div>
@endsection
