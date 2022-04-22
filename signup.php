<?php include('layouts/header.php'); ?>
    <main>
        <section class="signup padding">
            <div class="container">
                <h1 class="title">Monalisa Travel</h1>
                <form>
                    <h2 class="title">Create new account</h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label d-none">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label d-none">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label d-none">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                    </div>

                    <button type="submit" class="btn d-block w-100 background-primary white-txt-color my-3">sign up</button>
                    <div class="text-center">
                        <p class="white-txt-color my-3">Sign up with</p>
                        <div class="social media">
                            <a href="#"> <i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                        <p class="my-5">Do you have an account?<a href="login.php" class="primary-txt">Login</a> </p>
                    </div>
                </form>
            </div>
        </section>
    </main>
<?php include('layouts/footer.php'); ?>