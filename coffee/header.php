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

   <div class="header-2">

   <div class="flex">
      <div class="logo">
      <img src="images/logo.png" alt="team 20 Section Surabaya" style="width: 55px; height: 55px;" />
      <a href="home.php">Lower Manhattan</a>
      </div>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <div class="dropdown">
               <a href="#about" class="dropbtn">About &#9662;</a>
               <div class="dropdown-content">
                  <a class="text-drop" href="about.php">About Project</a>
                  <a class="text-drop" href="https://mavenanalytics.io/data-playground?page=4" target="_blank">Dataset</a>
                  <a class="text-drop" href="https://www.canva.com/design/DAGC2AzNZAk/rOh715PGFtDZfgoSV9yJ3g/view?utm_content=DAGC2AzNZAk&utm_campaign=designshare&utm_medium=link&utm_source=editor" 
                  target="_blank">Data Analytics Presentation</a>
                  <a class="text-drop" href="https://www.canva.com/design/DAGF3smrAIM/3mbrU52o4XHMw4eOJDMn6A/view?utm_content=DAGF3smrAIM&utm_campaign=designshare&utm_medium=link&utm_source=editor"
                  target="_blank">Software engineering presentation</a>
                  <a class="text-drop" href="https://lookerstudio.google.com/reporting/9bee6d65-ce19-41cc-8595-d7dd5dfa76f3" target="_blank">Looker Studio</a>
               </div>
            </div> 
            <a href="shop.php">Menu</a>
            <a href="contact.php">Contact</a>
            <a href="orders.php">Orders</a>
         </nav>
           
         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>