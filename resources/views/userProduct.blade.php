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
        <th>Product Name</th>
        <th>Price</th>
      </tr>
    @foreach($user_produsts as $user)
  <tr>
    <th>{{$user->name}}</th>
    <th>{{$user->pname}}</th>
    <th>{{$user->price}}</th>


  </tr>
  @endforeach
</table>

</body>
</html>
