@if (count($breadcrumbs))
    <nav class="mb-4">
        <ol class="flex flex-wrap">
            @foreach ($breadcrumbs as $item)
                <li class="leading-normal  {{ $loop->first ? 'text-black' : 'pl-2 before:float-left before:pr-2 before:content-[">"] before:text-black before:font-normal' }} {{ $loop->last ? 'text-slate-700 text-lg font-bold' : '' }}">
                    @isset($item['route'])
                        <a href="{{ $item['route'] }}" class="hover:text-blue-600">
                            {{ $item['name'] }}
                        </a>    
                    @else
                        {{ $item['name'] }}
                    @endisset
                </li>
            @endforeach
        </ol>
    </nav>
@endif
