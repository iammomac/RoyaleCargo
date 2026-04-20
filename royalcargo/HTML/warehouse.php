<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Warehouse</title>
<link rel="stylesheet" href="/CSS/warehouse.css">
<link rel="stylesheet" href="/CSS/navbar.css">
</head>
<body>

<div class="liquid-bg"></div>

<div class="warehouse-page">
<!-- <div class="container"> -->
<!-- Top Bar -->
    <header class="top-bar">
        <div class="nav-logo ">
            <span> <img src="/IMAGES/royal_cargo.png" alt="LOGO" width="150"></span>
        </div>

        <nav class="nav">
             <a href="/HTML/dashboard.html"class="nav-item">Dashboard</a>
            <a href="/HTML/cargo.html" class="nav-item">Cargo</a>
            <a class="nav-item" href="/HTML/shipment.html" style="text-decoration: none;">Shipment</a>
            <a href="/HTML/customer.html" class="nav-item">Customer</a>
            <a href="/HTML/warehouse.html" class="nav-item active">Warehouse</a>
        </nav>

        <div class="profile">
            <img src="/IMAGES/alex_tuki.jpg" alt="User profile">
            <div>
                <strong>Naddyir Nassor</strong><br>
                <small>Deportation Manager</small>
            </div>

             <div class="profile-dropdown">
                <a href="/HTML/login.html" id="logoutBtn">Log out</a>
            </div>
        </div>
    </header>
    <!-- SUMMARY CARDS -->
    <div class="summary-cards">
        <div class="card">
            <h4>In Warehouse</h4>
            <span id="inWarehouse">0</span>
        </div>

        <div class="card">
            <h4>Overdue</h4>
            <span id="overdueCount">0</span>
        </div>

        <div class="card">
            <h4>Total Revenue</h4>
            <span id="totalRevenue">TZs  0</span>
        </div>
    </div>

    <!-- TABLE -->
    <div class="table-container">
        <table id="warehouseTable">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Product ID</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Arrival Date</th>
                    <th>Amount Owed</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>C102</td>
                    <td>P340</td>
                    <td>25000</td>
                    <td>14</td>
                    <td>Furniture</td>
                    <td class="status overdue">Overdue</td>
                    <td>2026-02-01</td>
                    <td class="owed">350000</td>
                </tr>

                <tr>
                    <td>C204</td>
                    <td>P811</td>
                    <td>18000</td>
                    <td>8</td>
                    <td>Electronics</td>
                    <td class="status active">Taken</td>
                    <td>2026-02-10</td>
                    <td class="owed">0</td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

<!-- Overlay -->
<div class="overlay" id="overlay"></div>

<div class="side-panel" id="sidePanel">
    <div class="panel-header">
        <h2>Product Details</h2>
        <button class="close-btn" onclick="closePanel()">×</button>
    </div>

    <div class="panel-content"></div>
</div>

</div>
<script src="/JS/warehouse.js"></script>
</body>
</html>
