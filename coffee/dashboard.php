<?php

include 'config.php';
session_start();
$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
  
   <link rel="stylesheet" href="css/dashboard.css">
   <link rel="stylesheet" href="css/admin_style.css">
   
    <!-- CSS DataTables -->
    <link
      rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/><link
      rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"/>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

  </head>
  <body class="dashboard">

  <?php include 'admin_header.php'; ?>
  
    <!-- Header Section -->
    <section id="dashboardHeader" class="db_header">
        <!-- Dropdown for Store Location Filter -->
        <div class="content">
          <label for="storeLocationSelect">Select Store Location : </label>
          <select id="storeLocationSelect">
            <option value="All">All</option>
            <option value="Lower Manhattan">Lower Manhattan</option>
            <option value="Hell's Kitchen">Hell's Kitchen</option>
            <option value="Astoria">Astoria</option>
          </select>
        </div>
    </section>

    <!-- Chart Section -->
    <section class="chart">
      <div class="content">
        <h2>Sales Trend ($)</h2>
        <canvas id="salesTrendChart"></canvas>
      </div>
    </section>

    <section class="chart">
      <div class="content">
        <h2>Products Sold by Category (cup/pcs)</h2>
        <canvas id="productsSoldByCategoryChart"></canvas>
      </div>
    </section>

    <section class="chart">
      <div class="content">
        <h2>Sales Trend by Category (Week) ($)</h2>
        <canvas id="salesTrendByCategoryWeekChart"></canvas>
      </div>
    </section>

    <!--Products Sold Table Section -->
    <section id="product_sold_table" class="table">
      <div class="content">
        <h2>Products Sold Table</h2>
        <div class="table-responsive">
          <table
            id="productSoldTable"
            class="display nowrap"
            style="width: 100%"
          >
            <thead>
              <tr>
                <th>Store</th>
                <th>Product Category</th>
                <th>Product Detail</th>
                <th>Price ($)</th>
                <th>Product Sold (cup/pcs)</th>
              </tr>
            </thead>
            <tbody>
              <!-- Data will be filled via JavaScript -->
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Javascript -->
    <script src="js/dashboard.js"></script>
  </body>
</html>