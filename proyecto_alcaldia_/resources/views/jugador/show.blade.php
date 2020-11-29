<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-5 mt-5">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>NOMBRE EMPRESA</th>
                        <td>{{$player->nombres}}</td>
                    </tr>

                    <tr>
                        <th>NIT EMPRESA</th>
                        <td>{{$player->apellidos}}</td>
                    </tr>

                    <tr>
                        <th>DIRECCION EMPRESA</th>
                        <td>{{$player->numero_camisa}}</td>
                    </tr>

                    <tr>
                        <th>CREACIÓN</th>
                        <td>{{$player->apodo}}</td>
                    </tr>

                    <tr>
                        <th>ACTUALIZACIÓN</th>
                        <td>{{$company->udated_at}}</td>
                    </tr>
                </table>
                <a href="#">Regresar</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
