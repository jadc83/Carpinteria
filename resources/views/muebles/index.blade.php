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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($muebles as $mueble)
                        <tr class="border">
                            <td class="border p-2">{{ $mueble->denominacion }}</td>
                            <td class="border p-2">{{ comprobarAlto($mueble) }}</td>
                            <td class="border p-2">{{ comprobarAncho($mueble) }}</td>
                            <td class="border p-2 font-bold text-blue-600">{{ calcularPrecio($mueble)}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
