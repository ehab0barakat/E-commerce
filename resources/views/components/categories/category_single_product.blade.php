@props(['link', 'img', 'title'])


<x-link link="{{ $link ?? '/' }}" style="list-style: none ; width:20% ; padding:20px 0;">
    <div class="card" style="width: 15rem;">
        <img src={{ $img ?? 'images/3.png' }} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $title ?? 'this is the title :)' }}</h5>
        </div>
    </div>
</x-link>
