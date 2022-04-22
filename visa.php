<?php include('layouts/header.php'); ?>
    <main>
        <!--start banner section-->
        <section class="visa-banner">
            <div class="overlay">
                <div class="banner-text">
                    <h1 class=" white-txt-color text-center">Visa</h1>
                    <p class="text-center fw-bold white-txt-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                </div>
            </div>
        </section>
        <!--end banner section-->
        <section>
            <div class="container">
                <div class="visa-form">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="images">
                                <div class="image-icon">
                                    <img src="SiteAssets/images/imgIcon.png">
                                    <p><a href="#"><i class="bi bi-upload"></i></a> Drop your files here. or<a href="#"> Browse</a> </p>
                                </div>
                            </div>
                            <div class="uploaded">
                                <div class="d-flex justify-content-between">
                                    <div class="image-uploaded d-flex">
                                        <img src="SiteAssets/images/image%208.png">
                                       <div class="img-name ps-2">
                                           <p class="m-0">Passport.png</p>
                                           <p class="size">482 KB</p>
                                       </div>
                                    </div>
                                  <button class="btn"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                            <div class="uploaded">
                                <div class="d-flex justify-content-between">
                                    <div class="image-uploaded d-flex">
                                        <img src="SiteAssets/images/image%208.png">
                                        <div class="img-name ps-2">
                                            <p class="m-0">Passport.png</p>
                                            <p class="size">482 KB</p>
                                        </div>
                                    </div>
                                    <button class="btn"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="ex: Ahmed">
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="age" placeholder="Ex: 25">
                                </div>
                                <div class="mb-3">
                                    <label for="destination" class="form-label">Destination</label>
                                    <input type="text" class="form-control" id="destination" placeholder="ex: Egypt">
                                </div>
                                <div class="mb-3">
                                    <label for="travellers" class="form-label">No. of travellers</label>
                                    <input type="number" class="form-control" id="travellers" placeholder="Ex: 2">
                                </div>
                                <div class="mb-3">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <input type="text" class="form-control" id="nationality">
                                </div>
                                <button type="submit" class="btn d-block">Book Now</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
<?php include('layouts/footer.php'); ?>