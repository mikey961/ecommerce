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
                <x-danger-button onclick="confirm_Delete()">
                    Eliminar
                </x-danger-button>
                <button class="btn btn-black ml-2">
                    Actualizar
                </button>
            </div>
        </form>
    </div>

    <form id="delete-form" action="{{ route('admin.families.destroy', $family) }}" method="POST">
        @csrf
        @method('DELETE')

    </form>

    @push('js')
        <script>
            function confirm_Delete(){
                Swal.fire({
                    icon: "warning",
                    title: "Estas seguro de eliminar esta familia?",
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