<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shipment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/navbar.css">
    <link rel="stylesheet" href="/CSS/shipment.css">
</head>

<body>
    
<div class="liquid-bg"></div>
<div class="shipment-page">
    

<!-- Top Bar -->
    <header class="page-header">
        <div class="nav-logo ">
            <span> <img src="/IMAGES/royal_cargo.png" alt="LOGO" width="150"></span>
        </div>

        <nav class="nav">
             <a href="/HTML/dashboard.html"class="nav-item">Dashboard</a>
            <a href="/HTML/cargo.html" class="nav-item">Cargo</a>
            <a class="nav-item active" href="/HTML/shipment.html" style="text-decoration: none;">Shipment</a>
            <a href="/HTML/customer.html" class="nav-item">Customer</a>
            <a href="/HTML/warehouse.html" class="nav-item">Warehouse</a>
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
    </header>

<div class="page-header">
    <h1>Shipment</h1>
    <div class="header-buttons">
        <button class="btn btn-secondary">Save as Draft</button>
        <button class="btn btn-primary">Submit</button>
    </div>
</div>

<!-- Summary Cards -->
    <div class="summary-cards">
        <div class="card">
            <h4>Total Shipments</h4>
            <span>128</span>
        </div>
        <div class="card">
            <h4>Active Deliveries</h4>
            <span>76</span>
        </div>
        <div class="card">
            <h4>Pending Pickups</h4>
            <span>23</span>
        </div>
    </div>


<div class="main-layout">

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" placeholder="Search shipments..." class="search-bar">
        </div>


        <button class="add-load">+ Add Load</button>

        <div class="cargo-list">

            <div class="cargo-card">
                <div class="cargo-header">
                    <span>Cargo ID: 1234567890</span>
                    <span class="badge active">Delivery</span>
                </div>
                <div class="cargo-body">
                    <p>Pickup: Anytown, NY</p>
                    <p>Dropoff: Springfield, MA</p>
                </div>
                <div class="cargo-footer">
                    <span>Ava Thompson</span>
                    <button class="call-btn">☎</button>
                </div>
            </div>

            <div class="cargo-card">
                <div class="cargo-header">
                    <span>Cargo ID: 1234567891</span>
                    <span class="badge">Delivery</span>
                </div>
                <div class="cargo-body">
                    <p>Pickup: Anytown, NY</p>
                    <p>Dropoff: Springfield, MA</p>
                </div>
                <div class="cargo-footer">
                    <span>Ava Thompson</span>
                    <button class="call-btn">☎</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Content -->
    <div class="content">

        <div class="map-section card">
            <h2>Map Overview</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3961.785333826776!2d39.14054953013306!3d-6.79595299821861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2stz"
                    allowfullscreen
                    loading="lazy"></iframe>
        </div>

        <div class="info-row">

            <div class="card">
                <h2>Truck</h2>
                <p><strong>Model:</strong> Volvo FMX 860</p>
                <p><strong>Number:</strong> XL 43543</p>
                <p><strong>Type:</strong> Flatbed Truck</p>
                <p><strong>Trailer:</strong> TN 34-33-1</p>
            </div>

            <div class="card">
                <h2>Driver</h2>
                <p><strong>Name:</strong> Artem Bezrukov</p>
                <p><strong>Phone:</strong> +49 89 412 07 295</p>
                <p><strong>Email:</strong> driver@email.com</p>
            </div>

        </div>

        <div class="card">
            <h2>End Location</h2>
            <p>Mountain View, IL 67890</p>
        </div>

    </div>

</div>
</div>
</body>
</html>
