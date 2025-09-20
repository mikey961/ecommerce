<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Familias',
        'route' => route('admin.families.index'),
    ],
    [
        'name' => 'Editar '.$family->name,
    ],
]">
    <div class="card">
        <form action="{{ route('admin.families.update', $family) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <x-label class="mb-2">
                    Nombre
                </x-label>
                <x-input class="w-full" 
                    placeholder="Ingresar nueva familia" 
                    name="name"
                    value="{{ old('name', $family->name) }}"/>
            </div>
            <div class="flex justify-end">
                <button class="btn btn-black">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>