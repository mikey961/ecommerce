<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Categorías',
        'route' => route('admin.categories.index'),
    ],
    [
        'name' => 'Editar '.$category->name
    ],
]">
    <div class="card">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <x-validation-errors class="mb-4"/>
            <div class="mb-4">
                <x-label class="mb-2">
                    Familia
                </x-label>
                <x-select name="family_id" class="w-80">
                    @foreach ($families as $family)
                        <option value="{{ $family->id }}"
                            @selected(old('family_id', $category->family_id) == $family->id)>
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
                    value="{{ old('name', $category->name) }}"/>
            </div>
            <div class="flex justify-end">
                <x-danger-button onclick="confirm_Delete()">
                    Eliminar
                </x-danger-button>
                <button class="btn btn-black ml-2">
                    Actualizar
                </button>
            </div>
        </form>
    </div>

    <form id="delete-form" action="{{ route('admin.categories.destroy', $category) }}" method="POST">
        @csrf
        @method('DELETE')

    </form>

    @push('js')
        <script>
            function confirm_Delete(){
                Swal.fire({
                    icon: "warning",
                    title: "Estas seguro de eliminar esta categoría?",
                    text: "Después no podras revertirlo",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Sí, eliminar",
                    showCancelButton: true,
                    cancelButtonColor: "#d33",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form').submit()
                    }
                });
            }
        </script>
    @endpush
</x-admin-layout>