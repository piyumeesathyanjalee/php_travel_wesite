<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!--swiper css link-->
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!--header section starts-->
    <section class="header">
        <a href="home.php" class="logo">travel</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="htdocs/about.php">about</a>
            <a href="htdocs/package.php">package</a>
            <a href="htdocs/register.php">sign in</a>
           <!-- <a href="htdocs/book.php">book</a>-->
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!--header section end-->

    <!--home section start-->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/img3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the Sri Lanka</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/h1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slider slide" style="background:url(images/img3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--home section end-->

    <!--services section starts-->
    <section class="services">

        <h1 class="heading-title">Our services</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/sign.png " alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/map.png " alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/trecking.png " alt="">
                <h3>trecking</h3>
            </div>

            <div class="box">
                <img src="images/adventure.png " alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/offroad.png " alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/camping.png " alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>

    <!--services section end-->

    <!--home about section start-->
    <section class="home-about">

        <div class="image">
            <img src="images/img4.jpg " alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>A website (also written as a web site) is a collection of web pages and related content that is identified by a common domain name and published on at least one web server. Websites are typically dedicated to a particular topic or purpose, such as news, education, commerce, entertainment, or social media. Hyperlinking between web pages guides the navigation of the site, which often starts with a home page. The most-visited sites are Google, YouTube, and Facebook.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!--home about section end-->

    
<!--home packages section start-->

    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
           
            <div class="box">
                <div class="image">
                        <img src="images/img2.jpg " alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>A website (also written as a web site) is a collection of web pages and related content that is identified by a common domain name and published on at least one web server. Websi </p>
                    <a href="book.php" class="btn">book now</a>
                </div>  
            </div>

            <div class="box">
                <div class="image">
                        <img src="images/img2.jpg " alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>A website (also written as a web site) is a collection of web pages and related content that is identified by a common domain name and published on at least one web server. Websi</p>
                    <a href="book.php" class="btn">book now</a>
                </div>  
            </div>

            <div class="box">
                <div class="image">
                        <img src="images/img2.jpg " alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>A website (also written as a web site) is a collection of web pages and related content that is identified by a common domain name and published on at least one web server. We </p>
                    <a href="book.php" class="btn">book now</a>
                </div>  
            </div>
        </div>

        <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
    </section>
<!--home packages section end-->

<!--home offer section start-->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>A website (also written as a web site) is a collection of web pages and related content that is identified by a common domain name and published on at least one web server.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!--home offer section end-->

    <!--footer section starts-->
    <section class="footer">

        <div class="box-container">

                 <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i>book</a> 
                </div>
       

                <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>privency policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
                </div>

                <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i>011-3456780</a>
                <a href="#"> <i class="fas fa-phone"></i>011-3234398</a>
                <a href="#"> <i class="fas fa-envelope"></i>travel@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i>No.23.colombo7</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
                    <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
                    <a href="#"> <i class="fab fa-instagram"></i>instergram</a>
                    <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>

                </div>
        </div>

        <div class="credite"> create by <span>p&s. web designer</span> | all rights reserved!</div>

    </section>
    <!--footer section end-->
<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--custom js file link-->
<script src="js/script.js"></script>


</body>
</html>