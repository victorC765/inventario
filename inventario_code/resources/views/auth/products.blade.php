@extends('auth.dashboard')

@section('content')
    <main>
        <div class="p-4">

            <h1 class="text-2xl text-center font-bold p-4 border-b-8 border-purple-500 m-4">Productos</h1>
            <!--boton de modal-->
            @if (session('success'))
                <div class="bg-green-500 p-5 w-full rounded-md text-center transition-all duration-300 shadow-lg shadow-green-500/40 flex items-center justify-center">
                    {{ session('success') }}<img width="60" height="60" src="https://img.icons8.com/keek/100/smiling-face-icon.png" alt="smiling-face-icon"/>
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-500 p-5 w-full rounded-md text-center transition-opacity duration-300 shadow-lg shadow-red-500/40">
                    {{ session('error') }}
                </div>
            @endif
            <button
                class="middle none center mr-4 rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none m-4"
                data-ripple-light="true" data-dialog-target="animated-dialog">
                +añadir
            </button>
            <div data-dialog-backdrop="animated-dialog" data-dialog-backdrop-close="true"
                class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                <div data-dialog="animated-dialog" data-dialog-mount="opacity-100 translate-y-0 scale-100"
                    data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
                    data-dialog-transition="transition-all duration-300"
                    class="relative m-4 w-2/5 min-w-[40%] max-w-[40%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
                    <div
                        class="flex shrink-0 items-center p-4 font-sans text-2xl font-semibold leading-snug text-blue-gray-900 antialiased bg-gradient-to-r from-indigo-500 via-sky-400 to-cyan-300">
                        <img width="50" height="50" src="https://img.icons8.com/flat-round/50/plus.png" alt="plus"/>  Añadir Producto
                    </div>
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div
                            class="border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 font-sans text-base font-light leading-relaxed text-blue-gray-500 pl-24 pr-24 pt-8 pb-8">
                            <div class="m-4">
                                <label for="nombre_producto" class="block">Nombre del Producto:</label>
                                <input type="text" name="nombre_producto" id="nombre_producto"
                                    class="p-2 w-full rounded-full border-2 border-teal-400 focus:outline-none focus:border-teal-600 transition-all duration-500 active:shadow-lg active:shadow-teal-500/40">
                            </div>
                            <div class="m-4">
                                <label for="descripcion" class="block">Descripción</label>
                                <textarea name="descripcion" id="descripcion" class=" p-2 border-2 w-full border-teal-400 rounded-lg focus:outline-none focus:border-teal-600 transition-all duration-500 active:shadow-lg active:shadow-teal-500/40"></textarea>
                            </div>
                            <div class="m-4">
                                <label for="precio" class="block">Precio</label>
                                <input type="number" name="precio" id="precio"
                                    class=" p-2 border-2 w-full border-teal-400 rounded-full focus:outline-none focus:border-teal-600 transition-all duration-500 active:shadow-lg active:shadow-teal-500/40">
                            </div>
                            <div class="flex">
                              
                            <div class="m-4">
                              <label for="stock_actual" class="block">Stock Actual</label>
                                    <input type="number" name="stock_actual" id="stock_actual"
                                        class=" p-2 border-2 w-full border-teal-400 rounded-full focus:outline-none focus:border-teal-600 transition-all duration-500 active:shadow-lg active:shadow-teal-500/40">
                                </div>
                                <div class="m-4">
                                    <label for="categoria" class="block">Categoría</label>
                                <select name="categoria" id="categoria"
                                    class=" p-2 border-2 w-full border-teal-400 rounded-full focus:outline-none focus:border-teal-600 transition-all duration-500 active:shadow-lg active:shadow-teal-500/40">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->idCategoria }}">{{ $categoria->categoria }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="m-4">
                                <label for="stock_minimo" class="block">fecha de llegada</label>
                                <input type="date" name="fecha_llegada" id="fecha_llegada"
                                    class=" p-2 border-2 w-full border-teal-400 rounded-full focus:outline-none focus:border-teal-600 transition-all duration-500 active:shadow-lg active:shadow-teal-500/40">
                            </div>
                          </div>
                        </div>

                        <div class="flex shrink-0 flex-wrap items-center justify-end p-4 text-blue-gray-500">
                            <button data-ripple-dark="true" data-dialog-close="true" type="reset"
                                class="border-2 border-red-500 middle none center mr-1 rounded-lg py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                Cancel
                            </button>
                            <button data-ripple-light="true" data-dialog-close="true" type="submit"
                                class="middle none center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                Confirm
                            </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- from cdn -->
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>

        <!-- stylesheet -->
        <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
        <table class="min-w-full bg-white  rounded-md">
            <thead>
                <tr class="bg-orange-500 border-b  rounded-md">
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold rounded-tl-lg">Nombre</th>
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold">Descripción</th>
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold">Categoría</th>
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold">Precio</th>
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold">Stock</th>
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold rounded-tr-lg">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-2 px-4 text-gray-700">{{ $product->nombre_producto }}</td>
                        <td class="py-2 px-4 text-gray-700">{{ $product->descripcion }}</td>
                        <td class="py-2 px-4 text-gray-700">{{ $product->categoria->categoria }}</td>
                        <td class="py-2 px-4 text-gray-700">{{ $product->precio }}</td>
                        <td class="py-2 px-4 text-gray-700">{{ $product->stock_actual }}</td>
                        <td class="py-2 px-4 text-gray-700 flex">
                            <button href="{{ route('products.edit', $product->idProductos) }}"
                                class="text-blue-500 hover:text-blue-700 m-2">Editar</button>
                                <form action="{{ route('products.destroy', $product->idProductos) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 m-2 rounded">Eliminar</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>

        </div>
    </main>
@endsection
