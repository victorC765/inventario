@extends('auth.dashboard')

@section('content')
   <main>
    <div class="p-4">
        
        <h1 class="text-2xl text-center font-bold p-4">Productos</h1>
        <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-unstyled-modal" data-hs-overlay="#hs-unstyled-modal">
            Open modal
          </button>
          
          <div id="hs-unstyled-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-unstyled-modal-label">
            <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
              <div class="pointer-events-auto">
                <h3 id="hs-unstyled-modal-label">Title</h3>
                Modal content
              </div>
            </div>
          </div>
        <table class="min-w-full bg-white  rounded-md">
            <thead>
                <tr class="bg-rose-500 border-b  rounded-md">
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold rounded-tl-md">Nombre</th>
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold">Descripción</th>
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold">Categoría</th>
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold">Precio</th>
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold">Stock</th>
                    <th class="py-4 px-4 text-left text-gray-600 font-semibold rounded-tr-md">Acciones</th>
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
