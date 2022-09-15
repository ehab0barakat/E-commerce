@props(["reverse"])

@if (isset($reverse))
    @php
    $reverse = "flex-row-reverse"
    @endphp
@else
    @php
    $reverse = "flex-row"
    @endphp
@endif




<div class="container-fluid px-4">
    <div class="row d-flex justify-content-center  {{$reverse}} ">

        <div class="d-none d-md-block col-4 pt-5 mt-5 flex-grow-1">
            <h2 class="text-center fw-bolder " style="font-size:60px">#for her</h2>
            <img src="images/1.png" width="100%"  alt="">
        </div>

        <div class="col-12 col-md-8 pt-5 d-flex flex-column align-item-center">

            <section id="cats">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row gap-4">
                    <x-categories link="categories">All</x-categories>
                    <x-categories link="categories">BLAZERS</x-categories>
                    <x-categories link="categories">JACKETS</x-categories>
                    <x-categories link="categories">DRESSES</x-categories>
                    <x-categories link="categories">TROUSERS</x-categories>
                    <x-categories link="categories">ACCESSORIES</x-categories>
                </ul>
            </section>


            <section id="prods">
                <div class="row justify-content-center">
                    <x-prods title="Drawstring Solid Hooded Jacket" price="$55.00"/>
                    <x-prods title="Drawstring Solid Hooded Jacket" price="$55.00"/>
                    <x-prods title="Drawstring Solid Hooded Jacket" price="$55.00"/>
                    <x-prods title="Drawstring Solid Hooded Jacket" price="$55.00"/>
                    <x-prods title="Drawstring Solid Hooded Jacket" price="$55.00"/>
                    <x-prods title="Drawstring Solid Hooded Jacket" price="$55.00"/>
                </div>
            </section>
        </div>
    </div>


    <div class="position-relative">
        <img src="images/Group 110.png" width="100%" alt="">
        <div class="position-absolute" style="top: 40% ; left:25%">
            <h1 class="p-2 bg-dark text-white" >#newarrivals</h1>
            <h3>shop now</h3>
            <hr>
        </div>
    </div>

</div>








