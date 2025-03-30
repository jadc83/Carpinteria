 <x-app-layout>
    <form action="{{route('muebles.storeFabricado')}}" method="post">
         @csrf
         <label for="denominacion">Denominacion</label>
         <input type="text" name="denominacion">
         <label for="ancho">Ancho</label>
         <input type="text" name="ancho">
         <label for="alto">Alto</label>
         <input type="text" name="alto">
         <label for="precio">Precio base</label>
         <input type="text" name="precio">
         <x-primary-button>Crear</x-primary-button>
    </form>
 </x-app-layout>