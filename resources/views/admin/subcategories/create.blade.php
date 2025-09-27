<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Categorías',
        'route' => route('admin.subcategories.index')
    ],
    [
        'name' => 'Nueva subcategoría',
        
    ]
]">
    @livewire('admin.subcategories.subcategory-create')
</x-admin-layout>