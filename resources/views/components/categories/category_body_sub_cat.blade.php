<div class="row">
    <div class="border  border-3 rounded mt-4 position-relative d-flex justify-content-center gap-3 p-3 pt-4 " >
        <div class="son position-absolute p-1 border border-3 rounded bg-white" style="top: -20px ; left:3% ;z-index:9">{{$slot}}</div>
        <div class="son position-absolute p-1 border border-3 rounded fw-bold" style="top: -20px ; right:3%; background:#eee ; z-index:9">
            <a href={{strtolower($slot) }} style="list-style: none ;font-size: 12px ; " class="text-dark m-0 ">See All >></a>
        </div>

        <div class="row justify-content-center align-items-center" >

            <x-categories.category_single_product subCat="{{strtolower($slot)}}" title="t-shirt"/>

            <x-categories.category_single_product subCat="{{strtolower($slot)}}" title="t-shirt"/>

            <x-categories.category_single_product subCat="{{strtolower($slot)}}" title="t-shirt"/>

            <x-categories.category_single_product subCat="{{strtolower($slot)}}" title="t-shirt"/>

            <x-categories.category_single_product subCat="{{strtolower($slot)}}" title="t-shirt"/>

            <x-categories.category_single_product subCat="{{strtolower($slot)}}" title="t-shirt"/>

        </div>





    </div>

</div>
