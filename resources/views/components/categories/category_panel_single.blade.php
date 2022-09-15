<div
    class="bg-white text-dark fs-2 w-100 p-4 text-center border border-2 rounded {{ request()->routeIs('categories/$slot') ? 'active' : '' }} ">
    <x-link style="list-style: none" class="text-dark" link="categories/{{ strtolower($slot) }}">{{ $slot }}
    </x-link>
</div>
