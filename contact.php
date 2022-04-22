<?php include('layouts/header.php'); ?>
    <main>
        <!--start banner section-->
        <section class="contact-banner">
            <div class="overlay">
                <div class="banner-text">
                    <h1 class="h4 white-txt-color text-center">If You Have Any Questions,<br>
                        Don’t Hesitate To Contact Us.</h1>
                    <p class="fw-bold white-txt-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </section>
        <!--end banner section-->
<!--        start form-->
        <section id="contact-form">
            <div class="contact-form">
                <form>
                    <h2 class="text-center my-5 fw-bold green">Get in touch with us.</h2>
                    <div class="mb-3">
                        <label for="yourName" class="form-label d-none">Your Name</label>
                        <input type="text" class="form-control" id="yourName" aria-describedby="yourName"
                               placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label d-none">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Your Email">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Your Message" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Enter Your Message</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                    <div class="contact-info d-flex flex-wrap justify-content-around">
                        <a href="#"><p class="green"><i class="bi bi-envelope-fill"></i> monaliza@gmail.com</p></a>
                        <a href="#"><p class="green"><i class="bi bi-telephone-fill"></i> (+202)2526 8282</p></a>
                        <a href="#"><p class="green"><i class="bi bi-geo-alt-fill"></i> 4 ,Ali EL Kordy ST,El Maadi, Cairo.Egypt</p></a>
                    </div>
                </form>

            </div>

        </section>
<!--        end form-->
    </main>
<?php include('layouts/footer.php'); ?>