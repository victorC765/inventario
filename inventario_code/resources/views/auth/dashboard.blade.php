<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-screen flex flex-col bg-black">
    <div id="app" class="flex flex-col h-full">
        <header class="bg-orange-600 text-white p-4 flex justify-between">
            <!-- Encabezado del Dashboard -->
            <div class="flex items-center">
                <img width="60" height="60" src="https://img.icons8.com/plasticine/100/warehouse-1.png" alt="warehouse-1"/>
                <h1 class="text-2xl font-sans">Sistema de Inventario</h1>
            </div>
            <nav class="justify-end flex items-center">
                <a href="{{ route('home') }}" class="mr-4">Inicio</a>
                <a href="" class="mr-4">Perfil</a>
                <a href="{{ route('logout') }}" class="mr-4">Cerrar sesión</a>
            </nav>
        </header>

        <div class="flex flex-1 overflow-hidden">
            <aside class="bg-neutral-900 text-white w-64 flex flex-col ">
                <!-- Barra Lateral -->
                <ul class="flex-grow">
                    <li class="p-6 border border-gray-700 hover:bg-gray-700 w-full text-center text-gray-300"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="p-6 border border-gray-700 hover:bg-gray-700 w-full text-center text-gray-300"><a href="{{ route('products.index') }}">Productos</a></li>
                    <li class="p-6 border border-gray-700 hover:bg-gray-700 w-full text-center text-gray-300    "><a href="{{ route('sales.index') }}">Ventas</a></li>
                    <li class="p-6 border border-gray-700 hover:bg-gray-700 w-full text-center text-gray-300"><a href="{{ route('clients.index') }}">Clientes</a></li>
                </ul>
            </aside>

            <main class="flex-grow bg-gray-100 p-6 overflow-auto">
                <!-- Contenido Principal -->
                @yield('content')
            </main>
        </div>

        <footer class="bg-gray-800 text-white py-4">
            <div class="container mx-auto text-center">
                <p class="text-sm">&copy; {{ date('Y') }} Tu Empresa. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
