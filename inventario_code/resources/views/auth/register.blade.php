<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        <form action="" method="post"
            class="drop-shadow-lg bg-stone-900 ring-4 ring-orange-500  p-14 rounded-md block mx-auto w-3/12 justify-center mt-10">
            @csrf
            <h1 class="text-2xl text-center font-bold mb-4 text-orange-400">Registro</h1>
            <div class="mb-4">
                <label for="email" class="text-gray-300">Email:</label>
                <input type="text" name="email" placeholder="Email" class="bg-neutral-950 text-gray-50 p-2 w-full rounded-md">
                @error('email')
                    <small class="text-red-500">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-4">
                <label for="name" class="text-gray-300">Nombre de Usuario:</label>
                <input type="text" name="userName" placeholder="Nombre de usuario"
                      class="bg-neutral-950 text-gray-50 p-2 w-full rounded-md">
                @error('userName')
                    <small class="text-red-500">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="text-gray-300">Password:</label>
                <input type="password" ID="txtPassword"name="password" placeholder="Password"
                      class="bg-neutral-950 text-gray-50 p-2 w-full rounded-md">
                @error('password')
                    <small class="text-red-500">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="text-gray-300">Confirmar Password:</label>
                <input type="password" ID="ConfirmPassword" name="confirmPassword" placeholder="Password"
                class="bg-neutral-950 text-gray-50 p-2 w-full rounded-md">
            </div>
            @error('confirmPassword')
                <small class="text-red-500">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
            <div class="mb-4">
                <label for="password" class="text-gray-300">rol:</label>
                <select name="role" class="bg-neutral-950 text-gray-50 p-2 w-full rounded-md ">
                    <option selected>selecciona un roll</option>
                    <option value="vendedor">vendedor</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
            @error('role')
                <small class="text-red-500">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
            <div class="mb-4">
                <button type="submit" class="bg-orange-600 p-5 w-full rounded-md">Registrarse</button>
            </div>
        </form>
        @if (session('error'))
            <div class="bg-red-500 p-5 w-full rounded-md text-center">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="bg-green-500 p-5 w-full rounded-md text-center">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <script type="text/javascript">
        function mostrarPassword() {
            let cambio = document.getElementById("txtPassword");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }

        $(document).ready(function() {
            //CheckBox mostrar contraseña
            $('#ShowPassword').click(function() {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });

        function mostrarConfirmPassword() {
            let cambio = document.getElementById("ConfirmPassword");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.iconcf').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.iconcf').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }

        $(document).ready(function() {
            //CheckBox mostrar contraseña
            $('#ShowPassword').click(function() {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });
    </script>
</body>

</html>
