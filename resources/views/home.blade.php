<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
      #table-style {
      	width: 100%;
      	border: #666666 1px solid;
      	border-collapse: collapse;
      }
      th, td {
      	border: #666666 1px solid;
      	border-collapse: collapse;
      }
    </style>
</head>
<body>
    <h2><center>{{ $hello }}</center></h2>
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
</body>
</html>