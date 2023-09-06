<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
    <style>
        #table1 {
            width: 60%;
            
        }
    </style>
</head>
  <body>
    
        @extends("layouts.app")

        @section("title", "listado de Productos")

        @section("content")

            @if(session("status"))
                <div class="alert alert-success">
                    {{ session("status") }}
                </div>
            @endif

            <a href="{{ route('products.create') }}">Agregar</a>

            @if ($products->count())
                <table id="table1" class="table table-striped mx-auto m-3" >
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio Unitario</th>
                            <th>Stock</th>
                            <th>Ultima actualizacion</th>
                            <th>botones</th>
                        </tr>
                    </thead>
                    <tbody class="table-primary">
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->unit_price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->updated_at}}</td>
                                <td>
                                    botones
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    {!! $products->links() !!}
                </div>
            @else
                <h4>¡No hay productos cargados!</h4>
            @endif
        @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>