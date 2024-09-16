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
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="reviews">

   <h1 class="title">Capstone Project</h1>

   <div class="box-container">

   <div class="box">
         <h3>Background</h3>
         <p>Lower Manhattan adalah salah satu kota yang memiliki kedai kopi terbaik di New York City. Pada tahun 2023, Lower Manhattan menerima total penjualan $228.608 
            dan total transaksi 47.400 selama 6 bulan.</p>
      </div>

      <div class="box">
         <h3>Business Situation</h3>
         <p>Situasi bisnis yang terjadi adalah adanya penurunan penjualan pada bulan Februari 2023. Problem statement yang digunakan adalah bagaimana cara meningkatkan 
            penjualan 5% - 10% dalam 2 bulan ke depan.</p>
      </div>

      <div class="box">
         <h3>Scoope</h3>
         <p>Data yang diperoleh adalah data kedai kopi yang meliputi hasil penjualan, pemesanan, dan transaksi sejak 1 Januari 2024 hingga 31 Juni 2024. Data
            yang ada diberikan langsung oleh RevoU.</p>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Our Teams</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/ngurah.png" alt="ngurah">
         <div class="share">
            <a href="https://www.instagram.com/gng_whh/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/i-gusti-agung-ngurah-diputra-wiraguna-62a0692a1/" class="fab fa-linkedin"></a>
         </div>
         <h3>Ngurah Diputra</h3>
      </div>

      <div class="box">
         <img src="images/kayan.png" alt="kayan">
         <div class="share">
            <a href="https://www.instagram.com/kayantaryana/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/kayantaryana/" class="fab fa-linkedin"></a>
         </div>
         <h3>Kayan Taryana</h3>
      </div>

      <div class="box">
         <img src="images/baity.png" alt="baiti">
         <div class="share">
            <a href="https://www.instagram.com/abxck_ty/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/nur-baiti-2229172b1" class="fab fa-linkedin"></a>
         </div>
         <h3>Nur Baiti</h3>
      </div>

      <div class="box">
         <img src="images/ryo.png" alt="ryo">
         <div class="share">
            <a href="https://www.instagram.com/ryolemido/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/ryolemido/" class="fab fa-linkedin"></a>
         </div>
         <h3>Ryo Lemido</h3>
      </div>

      <div class="box">
         <img src="images/evi.png" alt="evi">
         <div class="share">
            <a href="https://www.instagram.com/eviagstnn_/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/evi-agustin-nurhadiyanti-ab956b285/" class="fab fa-linkedin"></a>
         </div>
         <h3>Evi Agustin</h3>
      </div>

      <div class="box">
         <img src="images/siska.png" alt="siska">
         <div class="share">
            <a href="https://www.instagram.com/siskagstn/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/siskanragst/" class="fab fa-linkedin"></a>
         </div>
         <h3>Siska Nur Agustin</h3>
      </div>

      <div class="box">
         <img src="images/agung.png" alt="agung">
         <div class="share">
            <a href="#" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/apermana67/" class="fab fa-linkedin"></a>
         </div>
         <h3>Agung Permana</h3>
      </div>

      <div class="box">
         <img src="images/latifa.png" alt="ifa">
         <div class="share">
            <a href="https://www.instagram.com/latifazahra13/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/latifazahraagustini" class="fab fa-linkedin"></a>
         </div>
         <h3>Latifa Zahra</h3>
      </div>

      <div class="box">
         <img src="images/nisa.png" alt="nisa">
         <div class="share">
            <a href="https://www.instagram.com/__annisailma/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/annisa-ilma-nufia/" class="fab fa-linkedin"></a>
         </div>
         <h3>Annisa Ilma</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>