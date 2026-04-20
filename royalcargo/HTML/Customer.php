<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="../CSS/customer.css">
    <!-- <link rel="stylesheet" href="/CSS/dashboard.css"> -->
    <link rel="stylesheet" href="../CSS/navbar.css">
</head>

<body>

<div class="liquid-bg"></div>

<div class="container">

    <!-- Top Bar -->
    <header class="top-bar"> 
        <div class="nav-logo">
            <img src="../IMAGES/royal_cargo.png" alt="LOGO" width="150">
        </div>

        <nav class="nav">
            <a href="../HTML/dashboard.php" class="nav-item">Dashboard</a>
            <a href="../HTML/cargo.php" class="nav-item">Cargo</a>
            <a href="../HTML/shipment.php" class="nav-item">Shipment</a>
            <a href="../HTML/customer.php" class="nav-item  active">Customer</a>
            <a href="../HTML/warehouse.php" class="nav-item">Warehouse</a>
        </nav>

        <div class="profile">
            <img src="../IMAGES/alex_tuki.jpg" alt="User profile">
            <div>
                <strong>Naddyir Nassor</strong>
                <small>Deportation Manager</small>
            </div>
            <div class="profile-dropdown">
                <a href="../api/logout.php" id="logoutBtn">Log out</a>
            </div>
        </div>
    </header>

    <!-- Orders Header -->
    <div class="orders-header">
        <h1>Orders</h1>

        <div class="orders-actions">
            <div class="search-wrapper">
                <img src="../icons/search.png" alt="Search">
                <input type="text" placeholder="Search order, invoice, email, company...">
            </div>

            <button class="primary-btn" onclick="openSidebar()">
                New sales order
            </button>
        </div>
    </div>

    <!-- Tabs -->
    <div class="orders-tabs">
        <a href="#">Active</a>
        <a href="#" class="active-tab">All Orders</a>
        <a href="#">To invoice</a>
        <a href="#">To Ship</a>
        <a href="#">Backorder</a>
    </div>

    <!-- Overview Card -->
    <div class="overview-card">
        <div>
            <h1>Sales order overview</h1>
            <p>
                Track, create, and manage all customer sales orders in one place.
                Use this dashboard to quickly review order status, totals, and recent activity.
            </p>
        </div>

        <button class="secondary-btn" onclick="openSidebar()">
            Create a New sales order
        </button>
    </div>

    <!-- Table -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Packed</th>
                    <th>Invoiced</th>
                    <th>Status</th>
                    <th>Order Total</th>
                    <th>Created At</th>
                    <th>Action</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody id="ordersTableBody">
            </tbody>
        </table>
    </div>

</div>

<!-- Overlay -->
<div id="screenBlurOverlay" class="screen-blur-overlay"></div>

<!-- Sidebar -->
<div id="orderSidebar" class="order-sidebar">
    <h2>Place new order</h2>
    <p>Fill in the details below and add the order to the table.</p>

    <input type="text" id="orderIdInput" placeholder="Order ID">
    <input type="text" id="customerNameInput" placeholder="Customer Name">
    <input type="date" id="packedInput">
    <input type="number" id="invoicedInput" placeholder="Invoiced">
    <select id="statusInput">
        <option>Pending</option>
        <option>Succeeded</option>
        <option>Declined</option>
    </select>
    <input type="number" id="orderTotalInput" placeholder="Order Total">
    <input type="date" id="createdAtInput">

    <div class="sidebar-buttons">
        <button class="primary-btn" onclick="addOrder()">Add to table</button>
        <button class="secondary-btn" onclick="closeSidebar()">Cancel</button>
    </div>
</div>

<script src="../JS/customer.js"></script>

</body>
</html>