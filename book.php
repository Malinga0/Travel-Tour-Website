<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section start -->
    <section class="header">

        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">about</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- headr section end  -->

    <div class="heading" style="">
<h1>book now</h1>
</div>

<!-- booking section -->

<section class="booking">
    <h1 class="heading-titile">
      book your trip!   
    </h1>
    <form action="book_form.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
        </div>
        <div class="inputBox">
            <span>where to  :</span>
            <input type="text" placeholder="place you want to visit" name="location">
        </div>
        <div class="inputBox">
            <span>How many :</span>
            <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="inputBox">
            <span>arrivals :</span>
            <input type="date"  name="arrivals">
        </div>
        <div class="inputBox">
            <span>leaving :</span>
            <input type="date"  name="leaving">
        </div>
    </div>
    <input type="submit" value="sumbit" class="btn" name="send">
    </form>
</section>












<!-- booking section end  -->


    <!-- footer section start -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick link</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>
            <div class="box">
                <h3>extra link</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>

            </div>
            <div class="box">
                <h3>contact infor</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-245-4569</a>
                <a href="#"><i class="fas fa-phone"></i>+123-555-4569</a>
                <a href="#"><i class="fas fa-envelope"></i>mali@gmail.com</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"> </i>twitter</a>
                <a href="#"><i class="fab fa-instagram"> </i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"> </i>linkedin</a>

            </div>
        </div>
        <div class="credit">Created by <span> mr. Malinga </span> | all rights reserved! </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- custom js file  -->
    <script src="script.js"></script>
</body>

</html>