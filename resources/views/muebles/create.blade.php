<x-app-layout>
        <div class="flex flex-col gap-4 mt-4 w-3/12 mx-auto">

            <form x-data="{ tipo:'fabricado'}" class="flex flex-col" action="{{ route('muebles.store') }}" method="post">
                @csrf
                <x-input-label for="tipo">Tipo de mueble:</x-input-label>

                <select x-model="tipo" id="tipo" class="border p-2">
                    <option value="fabricado">Fabricado</option>
                    <option value="prefabricado">Prefabricado</option>
                </select>

                <x-input-label>Denominacion</x-input-label>
                <x-text-input name="denominacion" />
                <x-input-label>Precio</x-input-label>
                <x-text-input name="precio" />

                <div x-show="tipo === 'fabricado'" class="mt-4">
                    <x-input-label for="alto">Alto:</x-input-label>
                    <x-text-input type="number" id="alto" name="alto" class="border p-2 block w-full" />

                    <x-input-label for="ancho">Ancho:</x-input-label>
                    <x-text-input type="number" id="ancho" name="ancho" class="border p-2 block w-full" />
                </div>

                <x-primary-button class="flex justify-center items-center text-center mt-4">
                    Crear mueble
                </x-primary-button>
            </form>
    </div>
</x-app-layout>
