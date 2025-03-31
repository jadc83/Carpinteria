<x-app-layout>
    <form class="mx-auto flex flex-col w-60" action="{{route('muebles.storePrefabricado')}}" method="post">
         @csrf
         <label for="denominacion">Denominacion</label>
         <input type="text" name="denominacion">
         <label for="precio">Precio</label>
         <input type="text" name="precio">
         <x-primary-button class="mt-4">Crear</x-primary-button>
    </form>
 </x-app-layout>