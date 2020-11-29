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
                        <th>NOMBRE EQUIPO</th>
                        <td>{{$equipo->nombre_equipo}}</td>
                    </tr>

                    <tr>
                        <th>LOGO</th>
                        <td>{{$equipo->logo}}</td>
                    </tr>

                    <tr>
                        <th>LOCALIDAD</th>
                        <td>{{$equipo->localidades_id}}</td>
                    </tr>
{{--                    <tr>--}}
{{--                        <th>CREACIÓN</th>--}}
{{--                        <td>{{$company->created_at}}</td>--}}
{{--                    </tr>--}}

{{--                    <tr>--}}
{{--                        <th>ACTUALIZACIÓN</th>--}}
{{--                        <td>{{$company->udated_at}}</td>--}}
{{--                    </tr>--}}
                </table>
                <a href="{{route('index')}}">Regresar</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
