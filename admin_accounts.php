<!-- connections connect.php, admin_login.php, and admin_accounts.php -->
<?php

include '..connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_admins = $conn->prepare("DELETE FROM `admins` WHERE id = ?");
   $delete_admins->execute([$delete_id]);
   header('location:admin_accounts.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Accounts</title>

<!-- Linking to stylesheets -->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="..admin_style.css">

</head>
<body>

<!-- connecting to admin_header.php for nav bar display -->

<?php include '..admin_header.php'; ?>

<section class="accounts">

   <h1 class="heading">Administrator Accounts</h1>

   <div class="box-container">

<!-- add, update, delete of accounts -->

   <div class="box">
      <p>Add New Administrator</p>
      <a href="register_admin.php" class="option-btn">Register New Administrator</a>
   </div>

   <?php
      $select_accounts = $conn->prepare("SELECT * FROM `admins`");
      $select_accounts->execute();
      if($select_accounts->rowCount() > 0){
         while($fetch_accounts = $select_accounts->fetch(PDO::FETCH_ASSOC)){   
   ?>
   <div class="box">
      <p> Admin I.D : <span><?= $fetch_accounts['id']; ?></span> </p>
      <p> Admin Name : <span><?= $fetch_accounts['name']; ?></span> </p>
      <div class="flex-btn">
         <a href="admin_accounts.php?delete=<?= $fetch_accounts['id']; ?>" onclick="return confirm('Are you sure you want to DELETE this Account?')" class="delete-btn">Delete</a>
         <?php
            if($fetch_accounts['id'] == $admin_id){
               echo '<a href="update_profile.php" class="option-btn">Update</a>';
            }
         ?>
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">nNo Accounts Available!</p>';
      }
   ?>

   </div>

</section>










<!-- javascript referrencing-->


<script src="..admin_script.js"></script>
   
</body>
</html>
