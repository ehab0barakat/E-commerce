<div class="border border-3 rounded mt-4 position-relative d-flex justify-content-center gap-3" >
    <div class="son position-absolute p-1 border border-3 rounded bg-white" style="top: -20px ; left:3% ;z-index:9">{{$slot}}</div>
    <div class="son position-absolute p-1 border border-3 rounded fw-bold" style="top: -20px ; right:3%; background:#eee ; z-index:9">
        <x-link link="{{$slot}}" style="list-style: none ;font-size: 12px ; " class="text-dark m-0 ">See All >></x-link>
    </div>


    <x-categories.category_single_product title="t-shirt" link="asdf" img="asdknma," />
    {{-- <x-categories.category_single_product  /> --}}
    {{-- <x-categories.category_single_product  /> --}}




</div>
