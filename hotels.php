<?php include('layouts/header.php'); ?>
<main>
    <!--start banner section-->
    <section class="hotels-banner">
        <div class="overlay">
            <div class="banner-text">
                <h1 class="fw-bold white-txt-color text-center">Simple - Unique - Friendly</h1>
                <p class="text-center white-txt-color">Make yourself at home in our Hotel.</p>
            </div>
            <form>
                <div class="filter">

                    <div class="location ">
                        <div class="dropdown  rounded-pill">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-geo-alt-fill"></i>
                                Where are you going?
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="duration ">
                        <div class="dropdown  rounded-pill">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-calendar-event-fill"></i>
                                Check in - Check out
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="hotels ">
                        <div class="dropdown  rounded-pill">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-building"></i>
                                Hotels
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rooms-counter justify-content-center d-flex flex-nowrap align-items-center rounded-pill">
                              <button class="btn"><i class="bi bi-plus-lg"></i></button>
                              <p class="my-0 mx-2 "> Number of rooms</p>
                                <button class="btn"><i class="bi bi-dash"></i></button>
                    </div>



                    <input class="form-control me-2 d-none" type="search" placeholder="Search" aria-label="Search">
                    <a href="searchResult.php" class="btn btn-success search" type="submit"><i class="bi bi-search"></i></a>


                </div>
            </form>
        </div>
    </section>
    <!--end banner section-->
<!--   start tabs-->
    <section id="hotelList">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-picks-tab" data-bs-toggle="pill" data-bs-target="#pills-picks" type="button" role="tab" aria-controls="pills-picks" aria-selected="true">Our Top Picks</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Homes&Apartments first</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-stars-tab" data-bs-toggle="pill" data-bs-target="#pills-stars" type="button" role="tab" aria-controls="pills-stars" aria-selected="false">Stars (Highest first)</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-starsLowest-tab" data-bs-toggle="pill" data-bs-target="#pills-starsLowest" type="button" role="tab" aria-controls="pills-starsLowest" aria-selected="false">Stars (Lowest first)</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-distance-tab" data-bs-toggle="pill" data-bs-target="#pills-distance" type="button" role="tab" aria-controls="pills-distance" aria-selected="false">Distance From Downtown</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-picks" role="tabpanel" aria-labelledby="pills-picks-tab">
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-stars" role="tabpanel" aria-labelledby="pills-stars-tab">
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-starsLowest" role="tabpanel" aria-labelledby="pills-starsLowest-tab">
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-distance" role="tabpanel" aria-labelledby="pills-distance-tab">
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 col-sm-6">
                                <img src="SiteAssets/images/unsplash_Yrxr3bsPdS0.png" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Sun Spalato Views</h5>
                                        <p class="price">777$</p>
                                    </div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <button class="btn">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<!--   end tabs-->
</main>
<?php include('layouts/footer.php'); ?>