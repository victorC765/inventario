<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>
    <link rel="shortcut icon" href="https://img.icons8.com/plasticine/100/warehouse-1.png" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-screen flex flex-col bg-black">
    <div id="app" class="flex flex-col h-full">
        <header class="bg-gradient-to-r from-indigo-500 via-pink-500 to-orange-500  text-white p-2 flex justify-between">
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
                    <li class="p-6 border border-gray-700 hover:bg-indigo-600 w-full text-center text-gray-300 
                    transition-all duration-500 focus:bg-indigo-600 focus:text-white hover:shadow-lg hover:shadow-indigo-500/40 active:opacity-[0.85]
                     disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none hover:text-black"><a href="{{ route('home') }}" class="flex items-center justify-center">Dashboard</a></li>
                    <li class="p-6 border border-gray-700 hover:bg-pink-600 w-full text-center text-gray-300
                     transition-all duration-500  focus:bg-pink-600 focus:text-white hover:shadow-lg hover:shadow-pink-500/40
                     active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none  hover:text-black"><a href="{{ route('products.index') }}" class="flex items-center justify-center"><img width="32" height="32" src="https://img.icons8.com/color/48/package.png" alt="package"/>Productos</a></li>
                    <li class="p-6 border border-gray-700 hover:bg-orange-500 w-full text-center text-gray-300
                     transition-all duration-500 focus:bg-orange-500 focus:text-white hover:shadow-lg hover:shadow-orange-500/40 active:opacity-[0.85] disabled:pointer-events-none 
                     disabled:opacity-50 disabled:shadow-none  hover:text-black"><a href="{{ route('sales.index') }}" class="flex items-center justify-center"><img width="32" height="32" src="https://img.icons8.com/color-glass/48/total-sales-1.png" alt="total-sales-1"/>Ventas</a></li>
                    <li class="p-6 border border-gray-700 hover:bg-red-500 w-full text-center text-gray-300
                     transition-all duration-500 focus:bg-red-500 focus:text-white hover:shadow-lg hover:shadow-red-500/40 active:opacity-[0.85] disabled:pointer-events-none
                      disabled:opacity-50 disabled:shadow-none  hover:text-black"><a href="{{ route('clients.index') }}" class="flex items-center justify-center"><img width="32" height="32" src="https://img.icons8.com/color/48/crowd.png" alt="customer-1"/>Clientes</a></li>
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
