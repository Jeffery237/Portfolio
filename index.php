<?php 
session_start();
if (empty($_SESSION['u_id'])) {
    // code...
    header("Location : login.php");
}

 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jeffery Portfolio</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    
<!--

-->

  </head>
  
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">

            <?php 
                        
            $p = $_SESSION['u_name'];
            $q =  $_SESSION['u_pwd'];
            echo "<a class='navbar-brand' href='index.html'><i class='uil'></i> Welcome, ".$p."</a>";
            
            ?>

            

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="About">About</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Projects">Projects</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Resume">Resume</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-6">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="uil-user"></i>
                        <a href="login.php">Logout</a>
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <h1><span> Welcome to my Portfolio.</span></h1>
                        <h1
                         class="animated animated-text">
                            <span class="mr-2">Hey mates, I'm</span>
                                <div class="animated-info">
                                    <span class="animated-item">Jefferson</span>
                                    <span class="animated-item">Beginner</span>
                                    <span class="animated-item">Software Developer</span>
                                </div>
                        </h1>

                        <p>Building a successful product is always means for me to improve myself in one way or the other. Driven by my curiosity and desire to solve problems, i constantly seek opportunities to enhance my skills and expand my knowledge in the field
                  
                        </p>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Let's Connect</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="images/undraw/undraw_software_engineer_lvl5.svg" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    

    <!-- RESUME -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4">My Projects</h2>

                    <div class="timeline">

                     <?php

                        require './include/dbcon.inc.php';
                        $sql="SELECT * FROM project WHERE project_type!='Academic_parcours' AND project_type!='Professional_parcours' ORDER BY project_date ASC";

                       if ($result = $conn->query($sql)) {
                            while ($row = $result->fetch_assoc()) {
                                $fieldname1=$row["project_name"];
                                $fieldname2=$row["project_type"];
                                $fieldname3=$row["project_des"];
                                $fieldname4=$row["project_date"];
                            
                        


                    echo '<div class="timeline-wrapper">
                        <div class="timeline-yr">
                            <span>'.$fieldname4.'</span>
                        </div>
                              <div class="timeline-info">
                                    <h3><span>'.$fieldname1.'</span><small>'.$fieldname2.'</small></h3>
                                    <p>'.$fieldname3.'</p>
                                </div>
                    </div>';
                        }
                    }

                    ?>
                        

                        

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4 mobile-mt-2">Academic Parcours</h2>

                    <div class="timeline">
                        <?php

                        require './include/dbcon.inc.php';
                        $sql="SELECT * FROM project WHERE project_type='Academic_parcours' ORDER BY project_date ASC";

                       if ($result = $conn->query($sql)) {
                            while ($row = $result->fetch_assoc()) {
                                $fieldname1=$row["project_name"];
                                $fieldname2=$row["project_type"];
                                $fieldname3=$row["project_des"];
                                $fieldname4=$row["project_date"];
                            
                        


                    echo '<div class="timeline-wrapper">
                        <div class="timeline-yr">
                            <span>'.$fieldname4.'</span>
                        </div>
                              <div class="timeline-info">
                                    <h3><span>'.$fieldname1.'</span><small></small></h3>
                                    <p>'.$fieldname3.'</p>
                                </div>
                    </div>';
                        }
                    }

                    ?>

                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
           

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                    <h3 class="mb-3 text-white">Join me on Social Media</h3>
                    <p class="footer-text mb-0 uil-phone"> 237 655178454</p>
                    <p><a class="uil-message" href="mailto:wilsonjeffery230@gmail.com"> wilsonjeffery230@gmail.com</a></p>
                    <a href="#" class="uil-facebook" data-toggle="tooltip" data-placement="left" title="Dribbble">facebook</a>
                    <a href="#" class="uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram">Instagram</a>
                    <a href="#" class="uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube">Youtube</a>
                </div>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Interested to work together? Let's talk</h2>

              <form action="include/contact.inc.php" method="post">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="sender_name" placeholder="Your Name" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="sender_email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12">
                    <textarea name="sender_message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Send">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; 2023 Wanki Jefferson. All rights reserved</p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>