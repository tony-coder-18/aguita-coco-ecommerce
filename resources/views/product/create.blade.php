@extends('layouts.basetemplate')

@section('content')
<form action="/products" method="POST">
    @csrf
  <div class="mb-3">
    <label for="titleInput" class="form-label">Título del producto</label>
    <input type="text" class="form-control" id="titleInput" name="title">
  </div>
  <div class="mb-3">
    <label for="priceInput" class="form-label">Precio</label>
    <input type="text" class="form-control" id="priceInput" name="price">
  </div>
  <div class="mb-3">
    <label for="descriptionInput" class="form-label">Desripción</label>
    <textarea class="form-control" id="descriptionInput" name="description"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Crear Producto</button>
  <a href="/products" class="btn btn-secondary">Cancelar</a>
</form>
@endsection