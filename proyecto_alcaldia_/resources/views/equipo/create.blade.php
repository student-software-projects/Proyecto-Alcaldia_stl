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
        <div class="col-md-4">
            <form action="#" method="post">
            @csrf

                <div class="form-group mt-5">
                    <label for="name">Nombre del equipo</label>
                    <input name="name" id="name" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nit">Logo</label>
                    <input name="nit" id="nit" type="text" class="form-control">
                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="address">Dirección de la empresa</label>--}}
{{--                    <input name="address" id="address" type="text" class="form-control">--}}
{{--                </div>--}}
                <hr>
                <button type="submit"  class="btn btn-primary">Guardar nueva empresa</button>
                <a href="{{route('index')}}" class="btn btn-danger">Cancelar</a>

            </form>
        </div>
    </div>
</div>
</body>
</html>



