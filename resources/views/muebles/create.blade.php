<x-app-layout>
    <div class="flex justify-between">
        <div class="mx-auto flex justify-between">
            <form action="{{route('muebles.createFabricado')}}" method="get">
                <x-primary-button class="w-80 h-40 m-2 flex justify-center items-center text-center">Fabricados</x-primary-button>
            </form>
            <form action="{{route('muebles.createPrefabricado')}}" method="get">
                <x-primary-button class="w-80 h-40 m-2 flex justify-center items-center text-center">Prefabricados</x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
