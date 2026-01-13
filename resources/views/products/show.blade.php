@extends('layouts.app')

@section('title', 'Detalles del Producto')

@section('content')
<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-3xl font-bold text-gray-900">Detalles del Producto</h1>
            <p class="mt-2 text-sm text-gray-700">Información completa del producto</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none space-x-3">
            <a href="{{ route('products.edit', $product) }}" class="inline-block rounded-md bg-yellow-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-yellow-500">
                Editar
            </a>
            <a href="{{ route('products.index') }}" class="inline-block rounded-md bg-gray-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-500">
                Volver
            </a>
        </div>
    </div>

    <div class="mt-8">
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-2">
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Código del Producto</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $product->codigo }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm font-medium text-gray-500">Nombre</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $product->nombre }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm font-medium text-gray-500">Categoría</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $product->categoria ?? 'Sin categoría' }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm font-medium text-gray-500">Precio</dt>
                        <dd class="mt-1 text-sm text-gray-900 font-semibold">${{ number_format($product->precio, 2) }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm font-medium text-gray-500">Stock Disponible</dt>
                        <dd class="mt-1">
                            <span class="inline-flex items-center rounded-full px-3 py-1 text-sm font-medium
                                @if($product->agotado()) bg-red-100 text-red-800
                                @elseif($product->stockBajo()) bg-yellow-100 text-yellow-800
                                @else bg-green-100 text-green-800
                                @endif">
                                {{ $product->stock }} unidades
                            </span>
                        </dd>
                    </div>

                    <div>
                        <dt class="text-sm font-medium text-gray-500">Estado</dt>
                        <dd class="mt-1">
                            @if($product->agotado())
                                <span class="text-red-600 font-semibold">Agotado</span>
                            @elseif($product->stockBajo())
                                <span class="text-yellow-600 font-semibold">Stock Bajo</span>
                            @else
                                <span class="text-green-600 font-semibold">Disponible</span>
                            @endif
                        </dd>
                    </div>

                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">Descripción</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $product->descripcion ?? 'Sin descripción' }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm font-medium text-gray-500">Fecha de Creación</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $product->created_at->format('d/m/Y H:i') }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm font-medium text-gray-500">Última Actualización</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $product->updated_at->format('d/m/Y H:i') }}</dd>
                    </div>
                </dl>

                <div class="mt-6 border-t border-gray-200 pt-6">
                    <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar este producto? Esta acción no se puede deshacer.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                            Eliminar Producto
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
