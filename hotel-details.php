<?php include('layouts/header-inner.php'); ?>
    <main>
        <section id="hotel-gallery" class="padding">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h1 class="fw-bold green">Sun Spalato Views</h1>
                    <p class="price">$230.00/day</p>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1">
                            <img src="SiteAssets/images/image%204.png">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"><img src="SiteAssets/images/image%205.png"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"><img src="SiteAssets/images/image%206.png"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"><img src="SiteAssets/images/image%205.png"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 5"><img src="SiteAssets/images/image%206.png"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="SiteAssets/images/image%202.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="SiteAssets/images/image%202.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="SiteAssets/images/image%202.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active">
                            <img src="SiteAssets/images/image%202.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="SiteAssets/images/image%202.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="SiteAssets/images/image%202.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <div class="d-flex justify-content-between padding">
            <div class="spex d-flex align-items-center">
                <p class="">Deluxe</p>
                <p>Family Room</p>
            </div>
            <div class="features d-flex text-center">
                <div class="ps-3">
                    <img src="SiteAssets/images/parking.png">
                    <p class="">Parking</p>
                </div>
                <div class="ps-3">
                    <img src="SiteAssets/images/drink.png">
                    <p class="">Drinks</p>
                </div>
                <div class="ps-3">
                    <img src="SiteAssets/images/food.png">
                    <p class="">Food</p>
                </div>
                <div class="ps-3">
                    <img src="SiteAssets/images/gym.png">
                    <p class="ps-3">Gym</p>
                </div>
                <div class="ps-3">
                    <img src="SiteAssets/images/wifi.png">
                    <p class="">Wifi</p>
                </div>
            </div>
        </div>
        <section id="description">
            <div class="container">
                <h2 class="green fw-bold">Description:</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="location">
                    <div class="row">
                        <div class="col-sm-6 col-md-5 col-lg-4">
                            <div class="map">
                                <img src="SiteAssets/images/Rectangle.png">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-7 col-lg-8 ">
                            <div class="first-location d-flex align-items-start">
                                <i class="bi bi-geo-alt-fill"></i>
                                <p>Cornish Road, Roushdy, 99998<br> Alexandria, Egypt</p>
                            </div>
                            <div class="sec-location d-flex align-items-baseline">
                                <i class="bi bi-geo-alt-fill"></i>
                                <p>Show location on map</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn d-block">Book Now</button>
                </div>
            </div>
        </section>
    </main>
<?php include('layouts/footer.php'); ?>