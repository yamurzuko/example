@include('header')

<table>
  <tr>
    <th>Username</th><th>Password</th><th>Email</th>
  </tr>
  @foreach($data as $row)

  <tr>
    <td>{{$row->username}}</td><td>{{$row->password}}</td><td>{{$row->email}}</td>
  </tr>

  @endforeach

</table>
