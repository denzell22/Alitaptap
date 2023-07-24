   <!-- connecting connect.php -->
   <?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}


if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_order = $conn->prepare("DELETE FROM `sales` WHERE id = ?");
   $delete_order->execute([$delete_id]);
   header('location:placed_sales.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Placed Sales</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>
   <!-- linking to admin_header.php -->
<?php include '../components/admin_header.php'; ?>

<section class="orders">

<h1 class="heading">Sales</h1>

<div class="box-container">   <!-- selecting sales from db -->

   <?php
      $select_orders = $conn->prepare("SELECT * FROM `orders`");
      $select_orders->execute();
      if($select_orders->rowCount() > 0){
         while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">   <!-- layouting order info on container -->

      <p> Sales ID : <span><?= $fetch_orders['id']; ?></span> </p>
      <p> User ID : <span><?= $fetch_orders['user_id']; ?></span> </p>
      <p> Placed On : <span><?= $fetch_orders['placed_on']; ?></span> </p>
      <p> Total Products : <span><?= $fetch_orders['total_products']; ?></span> </p>
      <p> Total Price : <span>Php<?= $fetch_orders['total_price']; ?></span> </p>

   </div>
   <?php
         }
      }else{
         echo '<p class="empty">No Sales Found!</p>';
      }
   ?>

</div>

</section>

</section>









   <!-- javascript-->

<script src="../js/admin_script.js"></script>
   
</body>
</html>