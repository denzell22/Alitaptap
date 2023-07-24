<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>
<div class="about_bg">

<section class="about">

   <div class="row">

      <div class="content" style="float:right; text-align:right;">
         <p><br><b>ALL THE WORLD'S A STAGE <br>So Take Your Spotlight!</b></p>
         </div>

   </div>

</section>
</div>

<section class="about_me">

   <div class="row_me">

      <div class="image_me">
         <img src="images/about-ralph.jpg" height="550px" style="float:right; padding-left: 1rem;" alt="">
         <img src="images/about-nath.jpg" height="550px" style="float:right; padding-left: 1rem;" alt="">
      </div>

      <div class="content_me">
         <h2 style="font-size: 30px; color:var(--black);">Browse Through!  Light Up!  Pop Off!</h2>
         <p style="line-height: 2; font-size:18px; color:var(--black); padding:1rem 0;  text-align: justify;">At Alitaptap, we are more than just an e-commerce platform; we are visionaries on a mission to revolutionize the jewelry industry. Our unwavering commitment to quality, transparency, and inclusivity sets us apart as we bridge the gap between niche jewelers and a discerning global audience of buyers. Our comprehensive marketplace serves as a centralized hub where jewelry makers can showcase their artistry and craftsmanship, and buyers can discover exquisite gem-studded creations that speak to their hearts. 
         <br><br> What truly distinguishes us is our dedication to fostering a collaborative environment. Alitaptap goes beyond traditional online marketplaces by creating a space where artisans can unleash their creativity, seek advice, and even collaborate with peers. Our focus on community and knowledge-sharing empowers jewelers and enthusiasts alike to engage in a meaningful dialogue, elevating the jewelry-making process to new heights.
         <br><br>By offering a curated selection of fine jewelry, we attract discerning buyers who prioritize superior craftsmanship, elegance, and uniqueness. Our platform eliminates the hassle of searching through fragmented online options or settling for mass-produced pieces. With Alitaptap, buyers can embark on a journey of exploration, discovering handcrafted creations that celebrate the art of jewelry making.
         <br><br>Transparency and ethical practices are at the core of our operations. We ensure that every product sold on Alitaptap exemplifies the highest standards of authenticity and quality. Buyers can make their purchases with confidence, knowing they are supporting ethical artisans and responsible sourcing.
         <br><br>Our vision extends beyond mere transactions; we seek to redefine the jewelry industry as an inclusive craft accessible to individuals from every corner of the world. By leveraging emerging technologies, we empower jewelry makers to optimize their operations, enhance marketing efforts, and connect with a global audience of passionate buyers.
         <br><br>Alitaptap is more than just a marketplace; it is a transformative force driving the jewelry industry forward. Empowering jewelers and connecting them with discerning buyers, we aspire to illuminate the world of jewelry, one crystal at a time. With unwavering dedication to quality, transparency, and inclusivity, we set a new standard for excellence and creativity, leaving a lasting impact on the jewelry industry and enriching lives through the timeless beauty of jewelry.<br><br></p>
      </div>

   </div>

</section>








<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>