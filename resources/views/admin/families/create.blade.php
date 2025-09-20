<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Familias',
        'route' => route('admin.families.index'),
    ],
    [
        'name' => 'Nueva familia',
    ],
]">
    <div class="card">
        <form action="{{ route('admin.families.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <x-label class="mb-2">
                    Nombre
                </x-label>
                <x-input class="w-full" 
                    placeholder="Ingresar nueva familia" 
                    name="name"
                    value="{{ old('name') }}"/>
            </div>
            <div class="flex justify-end">
                <button class="btn btn-black">
                    Guardar
                </button>
            </div>
        </form>
    </div>

</x-admin-layout>
