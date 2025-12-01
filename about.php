<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/pic19.jpeg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
        <p>We believe plants are more than just decor — they’re companions that bring joy, calmness, and fresh air into your life. 
         Our goal is to provide high-quality indoor and outdoor plants carefully curated to fit your lifestyle.</p>
         <p>From low-maintenance succulents to lush tropical greens, we’ve got something for every plant lover. With our doorstep delivery and expert tips, bringing nature home has never been easier.</p>
         <a href="contact.php" class="btn">Contact Us</a>

   </div>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>