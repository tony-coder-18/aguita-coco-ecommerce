@extends('layouts.basetemplate')

@section('content')
<h1>Carrito de compras</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre de producto</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cartItems as $cartItem)
        <tr>
            <th scope="row">{{$cartItem->Title}}</th>
            <td>${{$cartItem->Price}}</td>
        </tr>
    @endforeach
    
  </tbody>
</table>
<a href="products" class="btn btn-danger">Sigue comprando</a>

@endsection