@props(['link' => '/'])


<li class="nav-item my-3 fs-5 fw-bolder">
    <a {{ $attributes->merge(['class' => 'nav-link skincolor']) }} href="{{ $link }}"> {{ $slot }} </a>

</li>
