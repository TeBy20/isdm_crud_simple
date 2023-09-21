@extends("layouts.app")

@section("title", "Crear un nuevo Producto")

@section("content")

<h1 class="d-flex justify-content-center">Crear un nuevo Producto</h1>

<div class="card border border-info mx-auto p-2" style="width: 40rem;">

    <form action="{{ route('products.store') }}" method="POST" novalidate>
        @csrf

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" cols="30" rows="5">{{ old("descripcion") }}</textarea>
            @error('descripcion')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="unit_price">Precio Unitario:</label>
            <input class="form-control @error('unit_price') is-invalid @enderror" type="number" name="unit_price" value="{{ old('unit_price') }}">
            @error('unit_price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="stock">Stock:</label>
            <input class="form-control @error('stock') is-invalid @enderror" type="number" name="stock" value="{{ old('stock') }}">
            @error('stock')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Guardar Producto</button>
        <a class="btn btn-secondary" href="{{ route('products.index') }}">Cancelar</a>
    </form>
</div>

@endsection