@extends('auth.dashboard')

@section('content')
   <main>
    <div class="p-4">
        
        <h1 class="text-2xl text-center font-bold p-4">Productos</h1>
        <!--boton de modal-->
        <button
  class="middle none center mr-4 rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
  data-ripple-light="true"
  data-dialog-target="animated-dialog"
>
  añadir
</button>
<div
  data-dialog-backdrop="animated-dialog"
  data-dialog-backdrop-close="true"
  class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300"
>
  <div
    data-dialog="animated-dialog"
    data-dialog-mount="opacity-100 translate-y-0 scale-100"
    data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
    data-dialog-transition="transition-all duration-300"
    class="relative m-4 w-2/5 min-w-[40%] max-w-[40%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl"
  >
    <div class="flex shrink-0 items-center p-4 font-sans text-2xl font-semibold leading-snug text-blue-gray-900 antialiased">
      Añadir Producto
    </div>
    <div class="relative border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 p-4 font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased">
     <div class="m-4">
      <label for="" class="font-family ">Nombre Del Producto:</label>
        <input type="text" class="rounded-md w-full p-2 bg-slate-400">
     </div>
     <div class="m-4">
        <label for="">Descripción</label>
        <textarea class="w-full bg-slate-400">

        </textarea>
     </div>
    </div>
    <div class="flex shrink-0 flex-wrap items-center justify-end p-4 text-blue-gray-500">
      <button
        data-ripple-dark="true"
        data-dialog-close="true"
        class="middle none center mr-1 rounded-lg py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      >
        Cancel
      </button>
      <button
        data-ripple-light="true"
        data-dialog-close="true"
        class="middle none center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      >
        Confirm
      </button>
    </div>
  </div>
</div>
<div class="w-full pt-5 px-4 mb-8 mx-auto ">
    <div class="text-sm text-gray-700 py-1">
        Made with <a class="text-gray-700 font-semibold" href="https://www.material-tailwind.com/docs/html/dialog?ref=tailwindcomponents" target="_blank">Material Tailwind</a> by <a href="https://www.creative-tim.com?ref=tailwindcomponents" class="text-gray-700 font-semibold" target="_blank"> Creative Tim</a>.
    </div>
</div>

<!-- from cdn -->
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>

<!-- stylesheet -->
<link
  rel="stylesheet"
  href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
/>
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
                    <td class="py-2 px-4 text-gray-700">{{ $product->categoria->nombre_categoria }}</td>
                    <td class="py-2 px-4 text-gray-700">{{ $product->precio }}</td>
                    <td class="py-2 px-4 text-gray-700">{{ $product->stock_actual }}</td>
                    <td class="py-2 px-4 text-gray-700">
                        <a href="{{ route('products.edit', $product->idProductos) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                        <a href="{{ route('products.destroy', $product->idProductos) }}" class="text-red-500 hover:text-red-700">Eliminar</a>
                    </td>
                </tr>
                @endforeach
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>
        
    </div>
   </main>
   
@endsection
