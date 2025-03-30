<x-app-layout>
    <div class="flex">
        <div>
            <form action="{{route('muebles.createFabricado')}}" method="get">
                <x-primary-button>Fabricados</x-primary-button>
            </form>
        </div>
        <div>
            <form action="{{route('muebles.createPrefabricado')}}" method="get">
                <x-primary-button>Prefabricados</x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>