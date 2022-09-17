@props(['link', 'img', 'title'=> "" , "subCat"=>""])


<a href="{{ $link ?? "$subCat/$title"  }}" class="text-decoration-none col col-sm-3 col-md-4 col-lg-2 ">
    <div class="card border-0" style="background:transparent">
        <img src={{ $img ??'/images/flour.png' }} class="img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center text-dark">{{ $title ?? 'this is the title :)' }}</h5>
        </div>
    </div>
</a>
