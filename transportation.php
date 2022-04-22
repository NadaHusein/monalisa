<?php include('layouts/header.php'); ?>
<main>
    <!--start banner section-->
    <section class="transportation-banner">
        <div class="overlay">
            <div class="banner-text">
                <h1 class=" white-txt-color text-center">Transportation</h1>
                <p class="text-center fw-bold white-txt-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                </p>
            </div>
        </div>
    </section>
    <!--end banner section-->
    <section>
        <div class="container">
            <div class="booking-form">
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
    </section>
</main>
<?php include('layouts/footer.php'); ?>