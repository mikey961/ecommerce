<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Familias',
    ],
]">
    <x-slot name="action">
        <div class="mb-4">
            <a href="{{ route('admin.families.create') }}"
                class="btn btn-blue">
                Nueva familia
            </a>
        </div>
    </x-slot>

    @if ($families->count())
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700 border border-gray-200">
                <thead class="text-xs uppercase bg-gray-100 text-gray-600">
                    <tr>
                        <th scope="col" 
                            class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" 
                            class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" 
                            class="px-6 py-3">
                            Acción
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($families as $family)
                        <tr class="bg-white">
                            <th scope="row" 
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $family->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $family->name }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.families.edit', $family) }}"
                                    class="btn btn-green">
                                    Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $families->links() }}
        </div>
    
        @else
            <div class="flex items-center p-4 mb-4 text-sm text-blue-700 rounded-lg bg-blue-50 dark:text-blue-600" 
                role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3" 
                    aria-hidden="true" 
                    xmlns="http://www.w3.org/2000/svg" 
                    fill="currentColor" 
                    viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">
                    Info
                </span>
                <div>
                    <span class="font-normal">
                        Info alert!
                    </span> 
                    Todavía no existen familias de productos
                </div>
            </div>
    @endif
</x-admin-layout>
