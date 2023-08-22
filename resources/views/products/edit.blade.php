<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Edit a product</h1>
<div>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
</div>

     <form action="{{route('product.update',['product'=>$product])}}" method="POST">
        @csrf
        @method('put')
<div>
        <input type="text" name="name" placeholder="name" value="{{$product->name}}"><br>
        <input type="number" name="selling_price" placeholder="selling_price" value="{{$product->selling_price}}"><br>
        <input type="number" name="stock"  placeholder="stock" value="{{$product->stock}}"><br>
        <input type="text"  name="type" placeholder="type" value="{{$product->type}}"><br>
        <button type="submit" name="submit">Update</button>
</div>
 </form>

</body>
</html>
