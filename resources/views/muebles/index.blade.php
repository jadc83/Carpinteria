<x-app-layout>
    <div>
        @foreach ($prefabricados as $prefabricado)
            <p>Denomiancion: {{$prefabricado->denominacion}}</p>
            <p>Precio: {{$prefabricado->precio}}€</p>
        @endforeach
    </div>

    <div>
        @foreach ($fabricados as $fabricado)
            <p>Denominacion: {{$fabricado->denominacion}}</p>
            <p>Precio: {{(($fabricado->muebleable->alto * $fabricado->muebleable->ancho) / 100)  * $fabricado->precio}}€</p>
        @endforeach
    </div>


</x-app-layout>