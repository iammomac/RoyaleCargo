<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
</head>
<body>
<div class="liquid-bg"></div>
<div class="container">
    <!-- Top Bar -->
    <header class="top-bar"> 
       <div class="nav-logo ">
            <span> <img src="../IMAGES/royal_cargo.png" alt="LOGO" width="150"></span>
        </div>

         <nav class="nav">
             <a href="../HTML/dashboard.php"class="nav-item active">Dashboard</a>
            <a href="../HTML/cargo.php" class="nav-item">Cargo</a>
            <a class="nav-item" href="../HTML/shipment.php" style="text-decoration: none;">Shipment</a>
            <a href="../HTML/customer.php" class="nav-item">Customer</a>
            <a href="../HTML/warehouse.php" class="nav-item">Warehouse</a>
        </nav>

        <div class="profile">
            <img src="../IMAGES/alex_tuki.jpg" alt="User profile">
            <div>
                <strong>Naddyir Nassor</strong><br>
                <small>Deportation Manager</small>
            </div>

             <div class="profile-dropdown">
                <a href="../api/logout.php" id="logoutBtn">Log out</a>
            </div>
    </header>


    <!-- Greeting -->
    <section class="greeting">
        <h2>Good Morning, Naddyir Nassor</h2>
        <p>Today is Monday, February 09, 2026</p>
    </section>

    <!-- Main Content -->
    <section class="main">

        <!-- Upper Section -->
        <div class="up">

            <!-- Stats -->
            <div class="stats-row">

                <!-- Cargo Card -->
                <div class="card">
                    <h1>Cargo</h1>
                    <div class="cardcargo">
                        <div class="received">
                            <p>Received: <span>34</span></p>
                        </div>
                        <div class="onprocess">
                            <p>On process: <span>24</span></p>
                        </div>
                        <div class="delivered">
                            <p>Delivered: <span>77</span></p>
                        </div>
                    </div>
                </div>

                <!-- Shipment Card -->
                <div class="card">
                    <h1>Shipment</h1>
                    <div class="cardcargo">
                        <div class="received">
                            <p>Received: <span>61</span></p>
                        </div>
                        <div class="onprocess">
                            <p>On process: <span>50</span></p>
                        </div>
                        <div class="delivered">
                            <p>Delivered: <span>17</span></p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Map -->
            <div class="mapdiv">
                <h3>MAP OVERVIEW</h3>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7923.170764657339!2d39.252746518559775!3d-6.820175311387804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2stz!4v1770382818223!5m2!1sen!2stz"
                        style="border:0;"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>

        <!-- Lower Section -->
        <div class="dwn">
            <div class="card big">

                <div class="revenue">
                    <div>
                        <h4>Highest revenue</h4>
                        <h2>TZs 200 <small>(+17.6%)</small></h2>
                    </div>
                    <div>
                        <h4>Lowest monthly revenue</h4>
                        <h2>TZs 100 <small>(-41%)</small></h2>
                    </div>
                </div>

                <h4 class="chart-title">
                    Customer, Revenue and Month bar chart
                </h4>

                <div class="chart">
                    <div class="chart-container">
  <div class="bar" style="--size: 40%"> <span>40%</span> </div>
  <div class="bar" style="--size: 80%"> <span>80%</span> </div>
  <div class="bar" style="--size: 60%"> <span>60%</span> </div>
  <div class="bar" style="--size: 90%"> <span>90%</span> </div>
</div>
                </div>

            </div>
        </div>

    </section>

</div>

</body>
</html>
