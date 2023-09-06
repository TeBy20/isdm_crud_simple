
    
    @extends("layouts.app")

    @section("title", "crear un nuevo Product")

    @section("content")

        <h1>Crear un nuevo Product</h1>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('products.store') }}" method="POST" novalidate>
            @csrf
        
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            
            <br>

            <label for="descripcion">Descripcion:</label><br>
            <textarea name="descripcion" cols="30" rows="10">{{ old("descripcion") }}</textarea>

            <br>
            
            <label for="unit_price">Precio Unitario:</label>
            <input type="number" name="unit_price" value="{{ old('unit_price') }}">
            
            <br>

            <label for="stock">Stock</label>
            <input type="number" name="stock" value="{{ old('stock') }}">

            <br>

            <button type="submit">Guardar Producto</button>
            <a href="{{ route('products.index') }}">Cancelar</a>
</form>
    @endsection