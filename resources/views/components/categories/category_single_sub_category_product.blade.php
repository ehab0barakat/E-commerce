@props(['link', 'img', 'title' , "subCat" , "price" ,"rate" , "color" => "black"])


<a href="{{ $link ?? "/singleProduct"  }}" class="text-decoration-none  col col-sm-6 d-flex justify-content-between " >
    <div class="card border-0 m-auto" style="background:transparent">
        <img src={{ $img ?? '/images/flour.png' }} class="img-fluid" alt="...">
        <div class="card-body text-center ">
            <h5 class="card-title text-center" style="color:{{$color}}">{{ $title ?? 'this is the title :)' }}</h5>
            <h5 class="card-title text-center" style="color:{{$color}}">{{ $price ?? 'this is priceless :)' }}</h5>
            <h5 class="card-title text-center" style="color:{{$color}}">{{ $rate ?? 'this is more than u expect :)' }}</h5>
            <input type="button" class="btn bgskincolor" value="Add to Cart">
        </div>
    </div>
</a>
