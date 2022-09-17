<nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
    <div class="container-fluid bgskincolor d-flex justify-content-between">

      <a class="navbar-brand" href={{join("/" , explode("/",url()->current(),-1) )}}><i class="fa-solid fa-arrow-left"></i></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse d-lg-flex justify-content-around" id="navbarSupportedContent">

            <form class="d-flex  py-3" style="width: 90%">
                <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
            </form>
            <a class="navbar-brand flex-start" href="#"><i class="fa-solid fa-cart-plus"></i></a>
        </div>
    </div>
  </nav>
