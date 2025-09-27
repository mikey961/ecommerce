<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Categorías',
        'route' => route('admin.categories.index'),
    ],
    [
        'name' => 'Nueva Categoría',
    ],
]">
    <div class="card">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <x-validation-errors class="mb-4"/>
            <div class="mb-4">
                <x-label class="mb-2">
                    Familia
                </x-label>
                <x-select name="family_id" class="w-80">
                    @foreach ($families as $family)
                        <option value="{{ $family->id }}"
                            @selected(old('family_id') == $family->id)>
                            {{ $family->name }}
                        </option>
                    @endforeach
                </x-select>
            </div>
            <div class="mb-4">
                <x-label class="mb-2">
                    Nombre
                </x-label>
                <x-input class="w-full" 
                    placeholder="Ingresar nueva categoría" 
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