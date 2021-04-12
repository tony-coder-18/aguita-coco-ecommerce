@extends('layouts.basetemplate')

@section('content')
<h1 class="mt-4">Productos de Aguita de Coco</h1>

<div class="row my-4">
@foreach($products as $product)
    <div class="col-12 col-lg-4 bg-light mx-2 my-2">
        <h2>{{$product->Title}}</h2>
        <p class="text-sm">{{$product->Price}}</p>
        <p>{{$product->Description}}</p>
        <form action="/cart" method="POST">
        @csrf
        <input type="hidden" name="title" value={{$product->Title}}>
        <input type="hidden" name="price" value={{$product->Price}}>
        <input type="hidden" name="description" value={{$product->Description}}>
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir a carrito</button>
        </form>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
       <p>Añadido <strong>{{$product->Title}}</strong> al carrito</p>
      </div>
    </div>
  </div>
</div>
    </div>
@endforeach
</div>
<div class="mt-5">
	<a href="create" class="btn btn-secondary">Crear Producto</a>
	<a href="/cart" class="btn btn-success">Ver carrito</a>
</div>
@endsection
