<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Swiper CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <section class="header">
        <a href="home.php" class="logo">Travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- Header ends -->

    <!-- Home slider -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(images/background-img-home.jpg)">
                    <div class="content">
                        <span>explore , discover , travel</span>
                        <h3>Travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/background-img-home-2.jpg)">
                    <div class="content">
                        <span>explore , discover , travel</span>
                        <h3>Discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/background-img-home-3.jpg)">
                    <div class="content">
                        <span>explore , discover , travel</span>
                        <h3>make your tour Worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>


    <!-- Services Section Starts -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/hills.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="images/maps.png" alt="">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="images/school-bag.png" alt="">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="images/fire.png" alt="">
                <h3>Camp Fire</h3>
            </div>
            <div class="box">
                <img src="images/road-sign.png" alt="">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="images/travel.png" alt="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>

    <!-- Services Section ends -->

    <!-- Home About Section Starts -->
    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- Home About Section ends -->


    <!-- Home Packages Section starts -->
    <section class="home-packages">

        <h1 class="heading-title"> our packages </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/package-img-1.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package-img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package-img-3.webp" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
    </section>
    <!-- Home Packages Section ends -->

   <!-- Home Offer section starts -->
   <section class="home-offer">
<div class="content">
<h3>upto 50% off</h3>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid
nesciunt maiores quas! Magni cumque quaerat saepe!</p>
<a href="book.php" class="btn">book now</a>
</div>
</section>


   <!-- 
   Home Offer section ends -->




    <!-- Footer Section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions?</a>
                <a href="#"><i class="fas fa-angle-right"></i> About US</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms and conditons</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-1234-555</a>
                <a href="#"><i class="fas fa-phone"></i> +91 2342256632</a>
                <a href="#"><i class="fas fa-envelope"></i> myemail@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Indore india 456001</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> LinkedLIn</a>
            </div>
        </div>
    </section>


    <!-- 
Swiper JS link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>