<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOX ICONS -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/styles.css">
        <!--html pages-->
        <link rel="stylesheet" href="./index2.html">
        
        <link rel="stylesheet" href="./index4.html">
        <link rel="stylesheet" href="./Signup.php">

        
        
        <title>Glamorous</title>
    </head>
    <body>

        <!-- SCROLL TOP -->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!-- HEADER -->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Glamorous</a>

                <div class="nav__group" id="nav-group">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="#blog" class="nav__link">Blog</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!-- HOME -->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Glamorous</h1>
                        <h2 class="home__subtitle">Your Elegance <br> is here.</h2>
                        <a href="./test/Signup.php" class="button">Registration</a>
                    </div>
    
                    <img src="assets/img/home.png" alt="" class="home__img">
                </div>
            </section>
            
            <!-- ABOUT -->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">About us</span>
                        <h2 class="section-title about__initial"> The Best Elegant Jewellery</h2>
                        <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
                            </p>
                           <a  class="button"onclick="myFunction()" id="myBtn">Read more</a>
                        
                    </div>

                    <img src="assets/img/about.jpg" alt="" class="about__img">
                </div>
            </section>

            <!-- SERVICES -->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">Offering</span>
                <h2 class="section-title">Our amazing services</h2>

                <div class="services__container  bd-grid">
                    <div class="services__content">
                        
                        <h3 class="services__title">Fashionable Collections</h3>
                        <p class="services__description">Any jewellery accessoire you wish for.</p>
                    </div>

                    <div class="services__content">
                        <h3 class="services__title">Free Shipping</h3>
                        <p class="services__description">Free shipping on orders in Morocco.</p>
                    </div>

                    <div class="services__content">
                        <h3 class="services__title">100% Money Back</h3>
                        <p class="services__description">If the item didn't suit you.</p>
                    </div>
                </div>
            </section>

            <!-- blog -->
            <div class="container" >
         <div class="row">
            <?php
               $conn = mysqli_connect("localhost", "root", "", "signup") ;
               $query= mysqli_query( $conn ,"select * from posts");
               while($row=mysqli_fetch_array($query))
               {
                $id=$row["id"];
                   $title=$row["title"];
                   $author=$row["author"];
                   $image=$row["image"];
                   $content= substr($row["content"],0,200);
                   $date=$row["date"];
                    
               ?>
            <div class=" col-md-4">
               <div class="card mt-4" style="width: 18rem;">
                  <p>Published on : &nbsp; &nbsp; <?php echo "$date"; ?></p>
                  <p>writen by : &nbsp; &nbsp; <?php echo "$author"; ?></p>
                  <img class="card-img-top" src="/test/img/<?php echo $image;?>" alt="Card image ">
                  <div class="card-body">
                     <h5 class="card-title"><?php  echo "$title"; ?></h5>
                     <p class="card-text"><?php  echo "$content"?></p>
                     <a  class="btn btn-primary" href="pages.php?id=<?php echo "$id";?>">Read More</a>
                  </div>
               </div>
            </div>
            <?php            }         ?>
         </div>
      </div>

           

            <!-- APP -->
            <section class="app section bd-container">
                <div class="app__container bd-grid">
                    <div class="app__data">
                        <span class="section-subtitle app__initial">App</span>
                        <h2 class="section-title app__initial">Our App is available</h2>
                        <p class="app__description">Download our app, make shopping fun and easy and stay tuned with our latest products with professional designers.</p>
                        <div class="app__stores">
                            <a href="#"><img src="assets/img/app1.png" alt="" class="app__store"></a>
                            <a href="#"><img src="assets/img/app2.png" alt="" class="app__store"></a>
                        </div>
                    </div>

                    <img src="assets/img/movil-app.png" alt="" class="app__img">
                </div>
            </section>

            <!-- CONTACT US -->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's talk</span>
                        <h2 class="section-title contact__initial">Contact us</h2>
                        <p class="contact__description">Get In Touch With Us For The Best Quality Jewellery Collections & Accessoires.</p>
                    </div>

                    
                        
                   
                    <div>
                        <!--Section: Contact v.2-->
<section class="mb-4">

  

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                              </div>
                    </div>
                </div>
                <!--Grid row-->

                <div class="row">

                    
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                

            </form>

            <div class="text-center text-md-left">
                <a href="#" class="button" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>

    </div>

</section>

                    </div>
                </div>
            </section>
        </main>

        <!-- FOOTER -->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Glamorous</a>
                    <span class="footer__description">Jewellery Shop</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Important Links</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Privacy Policy</a></li>
                        <li><a href="#" class="footer__link">Shipping Details</a></li>
                        <li><a href="#" class="footer__link">Terms and Conditions</a></li>
                        <li><a href="#" class="footer__link">Media Kit</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    
                   
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Adress</h3>
                    <ul>
                        <li>Oujda - Morocco</li>
                        <li>+212 616-171 -819</li>
                        <li>Glamorousmorocco@email.com</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021 Glamorous. All right reserved</p>
        </footer>

        <!-- SCROLL REVEAL -->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!-- MAIN JS -->
        <script src="assets/js/main.js"></script>
    </body>
</html>