<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-4">
        <h2 class="text-2xl font-bold mb-4">Lista de Muebles</h2>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border p-2">Denominación</th>
                        <th class="border p-2">Altura (cm)</th>
                        <th class="border p-2">Anchura (cm)</th>
                        <th class="border p-2">Precio (€)</th>
                        <th class="border p-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($muebles as $mueble)
                        <tr class="border text-center">
                            <td class="border p-2">{{ $mueble->denominacion }}</td>
                            <td class="border p-2">{{ comprobarAlto($mueble) }}</td>
                            <td class="border p-2">{{ comprobarAncho($mueble) }}</td>
                            <td class="border p-2 font-bold">{{ calcularPrecio($mueble)}}</td>
                            <td class="border p-2 font-bold">
                                <form action="{{route('muebles.destroy', $mueble)}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <x-primary-button>Borrar</x-primary-button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <form class="mt-2" action="{{route('muebles.create')}}" method="get">
            <x-primary-button>Nuevo mueble</x-primary-button>
        </form>
    </div>
</x-app-layout>
