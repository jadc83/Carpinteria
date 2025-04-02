<x-app-layout>
    <div class="flex flex-col gap-4 mt-4 w-3/12 mx-auto">
        <form class="flex flex-col" action="{{ route('pedidos.store') }}" method="post">
            @csrf
            <x-input-label for="tipo">Tipo de mueble:</x-input-label>
            <select name="mueble_id" id="mueble_id" class="border p-2">
                @foreach ($muebles as $mueble)
                    <option value="{{$mueble->id}}">{{$mueble->denominacion}}</option>
                @endforeach
            </select>

            <x-input-label>Cantidad</x-input-label>
            <x-text-input name="cantidad" />

            <x-primary-button class="flex justify-center items-center text-center mt-4">Crear pedido</x-primary-button>
        </form>
    </div>
</x-app-layout>
