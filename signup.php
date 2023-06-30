<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jeffery's Sign Up</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    
<!--

-->

</head>

<!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Sign Up</h2>

              <form action="include/signup.inc.php" method="post">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Enter Username" >
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" >
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="password" class="form-control" name="pwd" placeholder="Password" >
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="password" class="form-control" name="pwdrep" placeholder="Confirm Password" >
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <button class="form-control submit-btn" name="submit">Create Account</button>
                  </div>

                  <a href="login.php">Already have an account ?</a>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>