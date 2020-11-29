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
        <th>Price</th>
        <th>Photo</th>
        <th>Description</th>
      </tr>
    @foreach($products as $product)
  <tr>
    <th>{{$product->name}}</th>
    <th>{{$product->price}}</th>
    <th>{{$product->photo}}</th>
    <th>{{$product->description}}</th>

  </tr>
  @endforeach
</table>

</body>
</html>
