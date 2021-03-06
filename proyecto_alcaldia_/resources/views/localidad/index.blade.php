
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>localidad</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <a class="btn btn-success mt-4 mb-3" href="#">CREAR LOCALIDAD</a>
            @if(session('message'))
                <div class="alert alert-{{session('type')}}" role="alert">
                    {{session('message')}}
                </div>
            @endif
            <div class="table-resposive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>LOCALIDAD</th>
                        <th>FECHA CREACIÓN</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($localidad  as $localidad)
                        <tr>
                            <td>{{ $localidad->id }}</td>
                            <td>{{ $localidad->localidad}}</td>
                            <td>{{ $localidad->created_at }}</td>
                            <td>
                                <form action="#" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="#" class="btn btn-sm btn-warning">Editar</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
