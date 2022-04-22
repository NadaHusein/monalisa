<?php include('layouts/header.php'); ?>
    <main>
        <!--start banner section-->
        <section class="hotels-banner">
            <div class="overlay">
                <div class="banner-text">
                    <h1 class="fw-bold white-txt-color text-center">Your Search Result</h1>
                    <p class="text-center white-txt-color">Make yourself at home in our Hotel.</p>
                </div>
                <div class="d-flex flex-wrap justify-content-center found-hotel">
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">Hotel Name</p>
                        <p>Huawei Seiser</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">City</p>
                        <p>Hurgada</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">Company</p>
                        <p>SA</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">Number of rooms</p>
                        <p>10</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">Check in</p>
                        <p>12-07-2021</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">Check out</p>
                        <p> 17-07-2021</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">No. of hotel rooms</p>
                        <p>444</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">Single room price</p>
                        <p>1200</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">Double room price</p>
                        <p>2200</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">suit price</p>
                        <p>5000</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">Booking code</p>
                        <p>13</p>
                    </div>
                    <div class="info text-center">
                        <p class="d-inline fw-bolder">total price</p>
                        <p>13000</p>
                    </div>
                </div>
            </div>
        </section>
        <!--end banner section-->
        <!--search result-->
        <section id="searchResult">
            <div class="container">



            </div>
            <div class="container">
                <div class="booking-rooms">
                    <h2 class="text-center green">Add our guests</h2>
                    <form>
                        <div class="input_fields_wrap">
                            <button class="add_field_button btn ">Add More Names</button>
                            <input type="text" class="form-control mb-3" name="residentName" placeholder="Enter Name">
                        </div>
                        <a type="submit" class="btn" href="bookingDetails.php">Submit</a>
<!--                        <button type="submit" class="btn">Submit</button>-->
                    </form>
                </div>

            </div>
        </section>
        <!--search result-->
    </main>
<?php include('layouts/footer.php'); ?>