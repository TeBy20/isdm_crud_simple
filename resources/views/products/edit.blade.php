@extends("layouts.app")

@section("title", "Edición del Producto #" . $product->id)

@section("content")
<h1 class="d-flex justify-content-center mx-auto">Edición del Producto #{{ $product->id  }}</h1>

<div class="card border border-info mx-auto p-3 m-3" style="width: 40rem;">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" novalidate>
        @csrf
        @method("PUT")

        <label class="form-label" for="name">Nombre:</label><br>
        <input class="form-control" type="text" name="name" value="{{ old('name', $product->name) }}">

        <br>

        <label class="form-label" for="description">Descripción:</label><br>
        <textarea class="form-control" name="description" cols="30" rows="10">{{ old("description", $product->description) }}</textarea>

        <br>

        <label class="form-label" for="unit_price">Precio Unitario:</label><br>
        <input class="form-control" type="number" name="unit_price" value="{{ old('unit_price', $product->unit_price) }}">

        <br>

        <label class="form-label" for="stock">Stock:</label><br>
        <input class="form-control" type="number" name="stock" value="{{ old('stock', $product->stock) }}">

        <br>

        <button class="btn btn-primary" type="submit">Guardar Producto</button>
        <a class="btn btn-secondary" href="{{ route('products.index') }}">Cancelar</a>
    </form>
</div>
@endsection