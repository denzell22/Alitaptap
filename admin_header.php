<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">
   

   <section class="flex">   <!-- container for navbar/admin header -->
   
      <a href="..dashboard.php" class="logo">
      <img src="alitaptap_logo-gold.png" alt="">   Alitaptap Co.   <span></span> <span>Admin</span><span>Panel</span> </a>
   

      <nav class="navbar">   <!-- navbar -->
         <a href="..dashboard.php">Home</a>
         <a href="..products.php">Products</a>
         <a href="..placed_orders.php">Orders</a>
         <a href="..sales.php">Sales</a>
         <a href="..admin_accounts.php">Admins</a>
         <a href="..users_accounts.php">Users</a>
         <a href="..messages.php">Messages</a>
      </nav>

      <div class="icons">    <!-- menu and user icons -->
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">    <!-- clickable profile overlay -->
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="..update_profile.php" class="btn">Update Profile</a>
         <div class="flex-btn">
            <a href="..register_admin.php" class="option-btn">Register</a>
            <a href="..admin_login.php" class="option-btn">Log In</a>
         </div>
         <a href="..admin_logout.php" class="delete-btn" onclick="return confirm('Log Out from the Website?');">Log out</a> 
      </div>

   </section>

</header>
