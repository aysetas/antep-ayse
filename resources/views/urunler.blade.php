<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel Pagination Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
<body>


<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Ekleyen</th>

      </tr>
    @foreach($products as $product)
  <tr>
    <th>{{$product->name}}</th>
    <th>{{$product->price}}</th>
    <th>{{$product->Users[0]->name}}</th>


  </tr>
  @endforeach
</table>
<div class="d-flex justfy-content-center">
    {{$products->Links()}}

</div>

</body>
</html>
