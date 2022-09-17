<x-app-layout>

    <style>
        body{
            background-image: url("/images/bg-food.png");
            background-repeat: repeat;
            background-size: cover;
        }


    </style>

    <x-categories.category-nav />

    <div class="container">

        <div class="row justify-content-center mt-5">
            <x-categories.category_single_sub_category_product color="white"/>


            <div class="col-12 text-center" style="border-radius:15px;background:#AFB8FF">
                <h2>"title"</h2>
                <p>"title"</p>
            </div>

            <div class="col-12 text-start text-dark" style="background:transparent">
                <h3>SKU : "SKU"</h3>
                <h3>Model : "Model"</h3>
                <h3>color : "color"</h3>
                <h3>Main Material : "Main Material"</h3>
            </div>



            <div class="col-12 text-center" style="border-radius:15px; background:#AFB8FF">

                <x-categories.category_customer_search />

            </div>


        </div>
    </div>




</x-app-layout>
