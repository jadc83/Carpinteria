 <x-app-layout>
    <div class="flex">
        <form class="flex flex-col text-center mx-auto" action="{{route('muebles.storeFabricado')}}" method="post">
             @csrf
             <label for="denominacion">Denominacion</label>
             <input type="text" name="denominacion">
             <label for="ancho">Ancho</label>
             <input type="text" name="ancho">
             <label for="alto">Alto</label>
             <input type="text" name="alto">
             <label for="precio">Precio base</label>
             <input type="text" name="precio">
             <x-primary-button class="mt-4 justify-center">Crear</x-primary-button>
        </form>
    </div>
 </x-app-layout>