<?php

$conn = mysqli_connect('localhost','myadmin123','12345678','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date)
   VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
    $message[] = 'appointment made successfully!';
   }else{
    $message[] = 'appointment failed';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist Website</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<!-- header section starts -->
 <header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">dental<span>Care.</span></a>

           <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
           </nav>

           <a href="#contact" class="link-btn">make appointment</a>
           
           <div id="menu-btn" class="fas fa-bars"></div>
           
        </div>

    </div>

 </header>
<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>let us brighten your smile</h3>
                <p>Lorem ipsum dolor sit amet consectetur illum possimus
                 delectus obcaecati,nisi tempore cum est aperiam in!</p>
                 <a href="#contact" class="link-btn">make appointment</a>
            </div>
        </div>

    </div>

</section>

<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">
 
    <div class="container">

        <div class="row align-items-center">
           
           <div class="col-md-6 image">
              <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
           </div>

           <div class="col-md-6 content">
              <span>about us</span>
              <h3>True Healthcare For Your Family</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              provident accusamus eum neque voluptate voluptatumsit amet, consectetur adipisicing elit.
              provident accusamus eum consectetur adipisicing elit.,consequuntur. Aut, in.</p>
              <a href="#contact" class="link-btn">make appointment</a>
           </div>

        </div>

    </div>

</section>

<!-- about section ends -->

<!-- service section starts -->

<section class="services" id="services">
 
    <h1 class="heading">our services</h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/Icon-1.jpg" alt="">
            <h3>Alignment specialist</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate,</p>
        </div>

        <div class="box">
            <img src="images/Icon-2.jpg" alt="">
            <h3>Cosmetic dentistry</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate,</p>
        </div>

        <div class="box">
            <img src="images/Icon-3.jpg" alt="">
            <h3>Oral hygiene experts</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate,</p>
        </div>

        <div class="box">
            <img src="images/Icon-4.jpg" alt="">
            <h3>Root canal specialist</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate,</p>
        </div>

        <div class="box">
            <img src="images/Icon-5.jpg" alt="">
            <h3>Live dental advisory</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate,</p>
        </div>

        <div class="box">
            <img src="images/Icon-6.jpg" alt="">
            <h3>Cavity inspection</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate,</p>
        </div>

    </div>

</section>
<!-- service section ends -->

<!-- process section starts -->

<section class="process">

    <h1 class="heading">work process</h1>

       <div class="box-container container">

           <div class="box">
            <img src="images/process-1.jpg" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>consectetur adipisicing elit. a molestias aspipsam itaque officia voluptatem laudantium.</p>
           </div>

           <div class="box">
            <img src="images/process-2.jpg" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>consectetur adipisicing elit. a molestias aspipsam itaque officia voluptatem laudantium.</p>
           </div>

           <div class="box">
            <img src="images/process-3.jpg" alt="">
            <h3>Dental Implants</h3>
            <p>consectetur adipisicing elit. a molestias aspipsam itaque officia voluptatem laudantium.</p>
           </div>

       </div>

</section>
<!-- process section ends -->

<!-- reviews section starts -->

<section class="reviews" id="reviews">

  <h1 class="heading"> statisfied clients </h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/pic-1.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            nesciun eaque voluptates exercitationem optio maxime explicabo
            quasi.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jhon Deo</h3>
            <span>statisfied client</span>
        </div>

        <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            nesciun eaque voluptates exercitationem optio maxime explicabo
            quasi.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Franky Leo</h3>
            <span>statisfied client</span>
        </div>

        <div class="box">
            <img src="images/pic-3.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            nesciun eaque voluptates exercitationem optio maxime explicabo
            quasi.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Liana</h3>
            <span>statisfied client</span>
        </div>

    </div>

</section>
<!-- reviews section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">

  <h1 class="heading">make appointment</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php
      if(isset($message)){
        foreach($message as $message){
            echo '<p class="message">'.$message.'</p>';
        }
      }
    ?>
    
    <span>your name :</span>
    <input type="text" name="name" placeholder="enter your name" class="box" required>
    <span>your email :</span>
    <input type="email" name="email" placeholder="enter your email" class="box" required>
    <span>your number :</span>
    <input type="number" name="number" placeholder="enter your number" class="box" required>
    <span>appointment date :</span>
    <input type="datetime-local" name="date" class="box" required>
    <input type="submit" value="make appointment" name="submit" class="link-btn">
  </form>

</section>
<!-- contact section ends -->

<!-- footer section starts -->

<section class="footer">

   <div class="box-container container">
    
   <div class="box">
    <i class="fas fa-phone"></i>
    <h3>phone number</h3>
    <p>+123-456-7890</p>
    <p>+111-222-3333</p>
   </div>

   <div class="box">
     <i class="fas fa-map-marker-alt"></i>
     <h3>our address</h3>
     <p>mumbai, india - 400104</p>
   </div>

   <div class="box">
     <i class="fas fa-clock"></i>
     <h3>opening hours</h3>
     <p>07:00am to 10:00pm</p>
   </div>

   <div class="box">
    <i class="fas fa-envelope"></i>
    <h3>email address</h3>
    <p>meheksayed@gmail.com</p>
    <p>hamdanshaikh@gmail.com</p>
   </div>

   </div>

   <div class="credit"> &copy; copyright @ by <span>Mehek Sayed</span> </div>
   
    </section>

<!-- footer section ends -->
























    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>