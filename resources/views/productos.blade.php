<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Productos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">🛒 CRUD de Productos</h1>

    <!-- FORMULARIO -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Agregar Producto
        </div>
        <div class="card-body">
            <form method="POST" action="/productos">
                @csrf
                <div class="mb-3">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="descripcion" class="form-control" placeholder="Descripción" required>
                </div>
                <div class="mb-3">
                    <input type="number" name="precio" class="form-control" placeholder="Precio" required>
                </div>
                <button class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>

    <!-- TABLA -->
    <div class="card">
        <div class="card-header bg-dark text-white">
            Lista de Productos
        </div>
        <div class="card-body">

            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>${{ $producto->precio }}</td>
                        <td>

                            <!-- ELIMINAR -->
                            <form action="/productos/{{ $producto->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>