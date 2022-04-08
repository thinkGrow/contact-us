<?php include "config.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Personal Portfolio - Bootstrap 5</title>
  <link rel="icon" href="img/RR_logo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="bg-light">

  <!-- navbar begins -->
  <nav class="navbar navbar-light fixed-top bg-light shadow-sm">
    <div class="container-lg">
      <a class="navbar-brand text-danger fw-bold fs-4" href="#">R.R.</a>

      <div class="dropdown">
        <button class="btn btn-secondary btn-danger" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#home">Home</a></li>
          <li><a class="dropdown-item" href="#about">About</a></li>
          <li><a class="dropdown-item" href="#services">Services</a></li>
          <li><a class="dropdown-item" href="#achievments">Achievments</a></li>
          <li><a class="dropdown-item" href="#contact">Contact</a></li>

        </ul>
      </div>

    </div>
  </nav>
  <!-- navbar ends -->


  <!-- home sections starts -->
  <section class="home py-5" id="home">
    <div class="container-lg">
      <div class="row min-vh-100 align-items-center align-content-center">

        <div class="col-md-6">
          <div class="home-img text-center">
            <img src="img/rubait.jpg" class="rounded-circle mw-100" alt="rubait">
          </div>
        </div>

        <div class="col-md-6 order-md-first">
          <div class="home-text">
            <p class="text-muted mb-1">Hello, I'm</p>
            <h1 class="text-danger text-uppercase fs-1 fw-bold">Rubait Reshad</h1>
            <h2 class="fs-4"> BSc Computer Science Student, IUB (Studying)  </h2>
            <h2 class="fs-4"> Sports Journalist, FIFA  </h2>
            <p class="mt-4 text-muted">I'm a sports journalist looking to get into the field of tech. I'm currently interested in web development and machine learning. I am learning web development with 
              html,css,php,bootstrap 5 & laravel and I'm learning to build neural network models from scratch using python, numpy, tensorflow etc.
            </p>
            <p class="mt-4 text-muted">Previously I have built games, worked with robotics at FabLab, participated in competitive programming. When I am not pursuing my education
              for a better career, I play football to keep myself mentally and physically fit.</p>
            <p></p>
          </div>
        </div>

      </div>



    </div>
  </section>
  <!-- home section ends -->


  <!-- about section start -->
  <section class="about py-5" id="about">
    <div class="container-lg py-4">

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">About Me</h2>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-6">
          <div class="about-text">
            <h3 class="fs-4 mb-3"></h3>
            <p class="text-muted"></p>
        </div>

        <div class="row text-center text-uppercase">
          <div class="col-sm-4">
            <div class="fact-item">
              <h4 class="fs-1 fw-bold">115</h4>
              <p class="text-muted">Credits completed</p>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="fact-item">
              <h4 class="fs-1 fw-bold">200+</h4>
              <p class="text-muted">Matches covered</p>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="fact-item">
              <h4 class="fs-1 fw-bold">1</h4>
              <p class="text-muted">Websites made</p>
            </div>
          </div>

        </div>


        <div class="row text-center text-uppercase">
          <div class="col-lg-12 d-flex align-items-center">
            <!-- <a href="#" class="btn px-3 btn-danger me-5">Download CV</a> -->
            <div class="social-links">
              <a href="https://www.facebook.com/rubait" target="_blank" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/ReshadRubait" target="_blank" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/reshad_rubait/" target="_blank" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/md-rubaut-reshed-chowdhury-b9b660146/" target="_blank" class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
              <a href="https://github.com/thinkGrow" target="_blank" class="text-dark me-2"><i class="fab fa-github"></i></a>


            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">

        <div class="skill-item mb-4 mt-5 mt-md-0"></div>
        <h3 class="fs-6">python</h3>
        <div class="progress" style="height: 1px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="65"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress" style="height: 20px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="65"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="skill-item mb-4"></div>
        <h3 class="fs-6">html</h3>
        <div class="progress" style="height: 1px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 55%;" aria-valuenow="55"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress" style="height: 20px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 55%;" aria-valuenow="55"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>


        <div class="skill-item mb-4"></div>
        <h3 class="fs-6">css</h3>
        <div class="progress" style="height: 1px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress" style="height: 20px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        

        <div class="skill-item mb-4"></div>
        <h3 class="fs-6">bootstrap</h3>
        <div class="progress" style="height: 1px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 30%;" aria-valuenow="30"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress" style="height: 20px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 30%;" aria-valuenow="30"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>



      </div>
    </div>

    </div>
  </section>
  <!-- about section end -->


  <!-- service section being -->
  <section class="services py-5" id="services">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">What I do</h2>
          </div>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="service-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-danger fs-2">
              <i class="fas fa-code"></i>
            </div>
            <h3 class="fs-5 py-2">Web Development</h3>
            <p class="text-muted">Build simple landing pages. <br> <br> </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-item shadow-sm p-4 rounded bg-white">
              <div class="icon my-3 text-danger fs-2">
                <i class="fab fa-python"></i>
              </div>
              <h3 class="fs-5 py-2">Machine Learning Development</h3>
              <p class="text-muted">Process & visualize data, build machine learning models and compare accuracy.</p>
            </div>
        </div>

          <div class="col-md-6 col-lg-4 mb-4">
              <div class="service-item shadow-sm p-4 rounded bg-white">
                <div class="icon my-3 text-danger fs-2">
                  <i class="fas fa-football-ball"></i>
                </div>
                <h3 class="fs-5 py-2">Sports Journalist</h3>
                <p class="text-muted">Attend sports stadiums and report as a live journalist all over Bangladesh.</p>
              </div>
          </div>

        
      </div>
    </div>
  </section>
  <!-- service section end -->


  <!-- freelancer available section start-->
  <section class="freelancer-available py-5 bg-danger">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <p class="text-light fs-5">Looking for a web developer or a researcher?</p>
          <h2 class="fs-1 text-light mb-4">I'm Available</h2>
          <a href="#contact" class="btn btn-outline-light">Hire Me</a>
        </div>
      </div>
    </div>
  </section>
   <!-- freelancer available section end -->



  <!-- achievment section start -->
  <section class="achievments py-5" id="achievments">

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5"> <br> Achievment</h2>
        </div>
      </div>
    </div>



    <div class="container-lg">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner 250-px-wide">
        <div class="carousel-item active">
          <img class="testimonial-image" src="img/achievment/IUB Programming Contest.jpg" class="d-block w-100" alt="..." style="width:100%; height: 600px;" >
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-dark fw-bolder">IEEE inter-university Programming Contest</h5>
            <p>Solving problems via programming in C++</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class ="testimonial-image" src="img/achievment/IEEE.jpg" class="d-block w-100" alt="900*500" style="width:100%; height: 600px;">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-light fw-bolder">Robo-race, LFR, Futsal, Content writing : Champion</h5>
            <p>Winning multiple competitions in one go. Clean slate.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="testimonial-image" src="img/achievment/tech_discussion.jpg" class="d-block w-100" alt="..." style="width:100%; height: 600px;"  >
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-light fw-bolder">Tech-Debate : Champion</h5>
            <p>It is better to debate a question without settling it than to settle a question without debating it.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class ="testimonial-image" src="img/achievment/Academy Award Ceremony.jpg" class="d-block w-100" alt="900*500" style="width:100%; height: 600px;">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-light fw-bolder">Dean's Honors List</h5>
            <p>Academic Award Ceremony for academic excellence.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next justify-content-center" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
  </div>
</section>

  <!-- achievments section end -->


  


  <!-- contact section start -->

  <section class="contact py-5" id="contact">
    <div class="container-lg py-4">

      <div class="row justify-content-center">

        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">Contact Me</h2>
          </div>           
        </div>
      </div>

      

      
      <div class="row">
        
      
        <div class="col-lg-6 col-md-6">
        <form action="signup.php" method="POST">
            <div class="mb-2">
                <label for="exampleFormControlTextarea1" class="form-label">Full Name</label>
                <textarea rows="1" name="fullname" class="form-control" id="exampleFormControlTextarea1"rows="3"></textarea>
            </div>

            <div class="contact-form mb-2">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>



            <div class="mb-2">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea rows="3" name="messagee" class="form-control" id="exampleFormControlTextarea1"rows="3"></textarea>
                <!-- <input type="text" rows="3" name="messagee" class="form-control" id="exampleFormControlTextarea1"rows="3"></textarea> -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                <input type="hidden" name="form_submitted" value="1" />
                <button type="submit" name="submit" class="btn btn-danger px-3">Send Message</button>
                </div>
        </form>
        </div>
       



        </div>
    

      

        <!-- <div class="col-lg-7 col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14606.048251687478!2d90.4230098!3d23.7647733!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b80a03c8e22f%3A0xd52685f4a2fe003c!2sBanasree%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1646915587309!5m2!1sen!2sbd"
           width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div> -->

        

        <div class="col-lg-3 col-md-6">

          <div class="contact-item d-flex mb-2">
            <div class="icon fs-4 text-danger">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="text ms-3">
              <h3 class="fs-5">E-mail</h3>
              <p class="text-muted ">rubaitreshad@gmail.com</p>
            </div>
          </div>

            <div class="contact-item d-flex mb-3">
              <div class="icon fs-4 text-danger">
                <i class="fas fa-phone"></i>
              </div>
              <div class="text ms-3">
                <h3 class="fs-5">Phone</h3>
                <p class="text-muted">+88017-415-155-95</p>
              </div>
            </div>

              <div class="contact-item d-flex mb-3 ">
                <div class="icon fs-4 text-danger">
                  <i class="fas fa-map-marker-alt "></i>
                </div>
                <div class="text ms-3">
                  <h3 class="fs-5">Home</h3>
                  <p class="text-muted">Banasree, Rampura, Dhaka</p>
                 
                </div>
              </div>
          </div>
      </div>     
          
      
 
      
      
      

        
      
    </div>
  </div>


  </section>
  <!-- contact section end -->


  <!-- footer section start -->
  <footer class="footer border-top py-4">
    <div class="container-lg">
       <div class="col-lg-12">
         <p class="m-0 text-center text-muted">  &copy; 2022 Rubait Reshad</p>
       </div>
    </div>
  </footer>

   <!-- footer section end -->

  







  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>