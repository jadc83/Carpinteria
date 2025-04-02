<x-app-layout>
        <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-4">
            <h2 class="text-2xl font-bold mb-4">Lista de Pedidos</h2>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-2">Numero de pedido</th>
                            <th class="border p-2">Cliente</th>
                            <th class="border p-2">Mueble</th>
                            <th class="border p-2">Cantidad</th>
                            <th class="border p-2">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr class="border justify-center text-center">
                                <td class="border p-2">{{ $pedido->id }}</td>
                                <td class="border p-2">{{ $pedido->user->name }}</td>
                                <td class="border p-2 font-bold">{{ $pedido->mueble->denominacion}}</td>
                                <td class="border p-2">{{ $pedido->cantidad }}</td>
                                @if ($pedido->mueble->muebleable_type === 'App\Models\Prefabricado')
                                    <td class="border p-2">{{$pedido->mueble->precio * $pedido->cantidad}}€</td>
                                @else
                                    <td class="border p-2">{{$pedido->mueble->muebleable->alto * $pedido->mueble->muebleable->ancho * $pedido->mueble->precio * $pedido->cantidad}}€</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <form class="mt-2" action="{{route('pedidos.create')}}" method="get">
                <x-primary-button>Nuevo pedido</x-primary-button>
            </form>
        </div>
</x-app-layout>