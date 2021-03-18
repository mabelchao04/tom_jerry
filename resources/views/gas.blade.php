@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/gas.css">

    <h2><center><b>{{ $hello }}</b></center></h2>
    <table cellpadding="3" cellspacing="3" id="table-style">
      <thead>
        <tr>
          <th>序</th>
          <th>油站代碼</th>
          <th>油站簡稱</th>
          <th>電話</th>
          <th>地址</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($intercom as $intercom)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $intercom->code }}</td>
          <td>{{ $intercom->sname }}</td>
          <td>{{ $intercom->tel }}</td>
          <td>{{ $intercom->address }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection
