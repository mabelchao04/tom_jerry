@extends('layouts.app')

@section('content')

  <h1>Contact Page</h1>

  @if(count($people))
    
    <ol>

    @foreach($people as $person)
      
      <li>{{$person}}</li>

    @endforeach

    </ol>

  @endif

@stop

@section('footer')

  <strong>CopyRight by Tom&Jerry</strong>

@stop