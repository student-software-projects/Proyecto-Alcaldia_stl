<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alcaldia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
					<span class="login100-form-title p-b-34">
						Ingresa tu cuenta :D
					</span>

                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                    <input id="first-name" class="input100" type="text" name="username" placeholder="Usuario">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                    <input class="input100" type="password" name="pass" placeholder="Contraseña">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        <a href="#">Ingresar</a>
{{--                        {{route('jugador.index_jugador')}}--}}
                    </button>
                </div>

                <div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Olvidé
						</span>

                    <a href="#" class="txt2">
                        Usuario / Contraseña?
                    </a>
                </div>
                <div class="w-full text-center">
                    <a href="{{route('index')}}" class="txt3">
                        Inicio
                    </a>
                </div>

                <div class="w-full text-center">
                    <a href="#" class="txt3">
                        Crear cuenta
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
        </div>
    </div>
</div>



<div id="dropDownSelect1"></div>

<script src="{{url('js/app.js')}}"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
</body>
</html>

