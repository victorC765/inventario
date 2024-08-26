<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex justify-end m-4">
        <button class="bg-indigo-500  shadow-lg shadow-indigo-500/50 text-white px-4 py-2 rounded-sm" onclick="window.location.href='{{ route('login') }}'">Iniciar Sesión</button>
    </div>
    <div class="flex items-center justify-center m-32">
        <div class="bg-blue-500 p-6 text-white">
          Bienvenido a mi sistema de Inventario
        </div>
      </div>
</body>
</html>
