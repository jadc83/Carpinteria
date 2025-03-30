<x-app-layout>
    <form action="{{route('muebles.storePrefabricado')}}" method="post">
         @csrf
         <label for="denominacion">Denominacion</label>
         <input type="text" name="denominacion">
         <label for="precio">Precio</label>
         <input type="text" name="precio">
         <x-primary-button>Crear</x-primary-button>
    </form>
 </x-app-layout>