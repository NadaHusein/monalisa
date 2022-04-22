<?php include('layouts/header.php'); ?>
<main>
    <section class="login padding">
        <div class="container">
            <h1 class="title">Monalisa Travel</h1>
            <form>
                <h2 class="title">Login to your account</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label d-none">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label d-none">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
               <div class="d-flex justify-content-between">
                   <div class="mb-3 form-check">
                       <input type="checkbox" class="form-check-input" id="exampleCheck1">
                       <label class="form-check-label white-txt-color" for="exampleCheck1">Remember Me</label>
                   </div>
                   <div>
                       <a href="#" class="white-txt-color">Forget Your Password?</a>
                   </div>
               </div>
                <button type="submit" class="btn d-block w-100 background-primary white-txt-color my-3">Login</button>
               <div class="text-center">
                   <p class="white-txt-color my-3">Sign in with</p>
                   <div class="social media">
                       <a href="#"> <i class="bi bi-facebook"></i></a>
                       <a href="#"><i class="bi bi-twitter"></i></a>
                       <a href="#"><i class="bi bi-instagram"></i></a>
                   </div>
                   <p class="my-5">Don't have an account?<a href="signup.php" class="primary-txt">Sign up</a> </p>
               </div>
            </form>
        </div>
    </section>
</main>
<?php include('layouts/footer.php'); ?>