<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>


<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
  <tr>
@foreach($users as $user)
  <th>{{$user->name}}</th>
    <th>{{$user->email}}</th>
    <th>{{$user->password}}</th>
  </tr>
@endforeach
</table>

</body>
</html>
