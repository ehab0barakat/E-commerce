{{-- @props(["title", "price"]) --}}


<div class="col col-4" {{$attributes}}>

    <div class="card bg-transparent border-0" style="width: 18rem;">
        <img src="images/3.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="text-center text-nowrap">{{$title}}</h5>
            <p class="text-center text-nowrap fw-bolder ">{{$price}}</p>
        </div>
    </div>

</div>


