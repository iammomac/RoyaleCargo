<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/cargo.css">
    <title>Cargo</title>
</head>
<body>

<div class="liquid-bg"></div>

<div class="container">
    <header class="top-bar"> 
        <div class="nav-logo">
            <img src="../IMAGES/royal_cargo.png" alt="LOGO" width="150">
        </div>

        <nav class="nav">
            <a href="../HTML/dashboard.php" class="nav-item">Dashboard</a>
            <a href="../HTML/cargo.php" class="nav-item active">Cargo</a>
            <a href="../HTML/shipment.php" class="nav-item">Shipment</a>
            <a href="../HTML/customer.php" class="nav-item">Customer</a>
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


<div class="cargo-title">
    <h1>Cargo</h1>
</div>

<div class="cargo-cards">
    <div class="card purple">
        <img src="../icons/top-right-arrow.png" class="card-arrow">
        <div class="card-content">
            <h1>120 <img src="../icons/rise-last.png" class="mini-icon"></h1>
            <h4>All Cargo</h4>
        </div>
    </div>

    <div class="card grey">
        <img src="../icons/top-right-arrow.png" class="card-arrow">
        <div class="card-content">
            <h1>40 <img src="../icons/rise-last.png" class="mini-icon"></h1>
            <h4>To invoice</h4>
        </div>
    </div>

    <div class="card purple">
        <img src="../icons/top-right-arrow.png" class="card-arrow">
        <div class="card-content">
            <h1>50 <img src="../icons/rise-last.png" class="mini-icon"></h1>
            <h4>To ship</h4>
        </div>
    </div>
</div>

<div class="cargo-controls">
    <div class="search-box">
        <img src="../icons/search.png">
        <input type="text" placeholder="Search">
    </div>

    <div class="control-box">
        <img src="/icons/filter.png">
        <p>Filters</p>
        <img src="../icons/arrow-down.png">
    </div>

    <div class="control-box">
        <img src="../icons/sort.png">
        <p>Sort</p>
        <img src="../icons/arrow-down.png">
    </div>

    <div class="new-order-box">
        <button id="openCargoSidebar">
            <img src="../icons/plus.png">
            <p>New Cargo</p>
        </button>
    </div>
</div>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th><input type="checkbox"></th>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody id="cargoTableBody">
            <tr style="border-bottom: 1px solid #ccc; text-align: center;">
                    <td style="font-size: 14px; width: 50px;">
                        <input type="checkbox" style="width: 15px; height: 15px;">
                    </td>
                    <td style="padding: 0px; font-size: 12px;  text-align: center; vertical-align: middle;">1234567890</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">John Doe</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">2026-01-01</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">$100</td>
                    <td style="padding: 8px; font-size: 12px; text-align: center; vertical-align: middle; display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 10px;">
                        <div style="display: flex; flex-direction: row; height: 20px; align-items: center; justify-content: center; gap: 10px; background-color: #fff2ab; padding: 0px 10px; border-radius: 20px;">
                            <img src="../icons/pending.png" alt="Pending" style="width: 20px; height: 20px;">
                        <p style="font-size: 12px;">Pending</p>
                        </div>
                    </td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">$100.00</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">2026-01-01</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">
                        <img src="../icons/dots.png" alt="Dots" style="width: 15px; height: 15px;">
                    </td>
                    <td style="padding: 10px; font-size: 12px; text-align: center; vertical-align: middle;">
                        <img src="../icons/visible.png" alt="Eye" style="width: 15px; height: 15px;">
                    </td>
                </tr>

                <tr style="border-bottom: 1px solid #ccc; text-align: center; background-color: #f0f0f0;">
                    <td style="font-size: 14px; width: 50px;">
                        <input type="checkbox" style="width: 15px; height: 15px;">
                    </td>
                    <td style="padding: 0px; font-size: 12px;  text-align: center; vertical-align: middle;">1234567890</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">John Doe</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">2026-01-01</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">$100</td>
                    <td style="padding: 8px; font-size: 12px; text-align: center; vertical-align: middle; display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 10px;">
                        <div style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 10px; height: 20px; background-color: #bbf7d0; padding: 0px 10px 0px 10px; border-radius: 20px;">
                            <img src="../icons/check.png" alt="check" style="width: 20px; height: 20px;">
                        <p style="font-size: 12px;">Succeeded</p>
                        </div>
                    </td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">$100.00</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">2026-01-01</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">
                        <img src="../icons/dots.png" alt="Dots" style="width: 15px; height: 15px;">
                    </td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">
                        <img src="../icons/visible.png" alt="Eye" style="width: 15px; height: 15px;">
                    </td>
                </tr>

                <tr style="border-bottom: 1px solid #ccc; text-align: center;">
                    <td style="font-size: 14px; width: 50px;">
                        <input type="checkbox" style="width: 15px; height: 15px;">
                    </td>
                    <td style="padding: 0px; font-size: 12px;  text-align: center;">1234567890</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center;">John Doe</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center;">2026-01-01</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center;">$100</td>
                    <td style="padding: 8px; font-size: 12px; text-align: center; display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 10px;">
                        <div style="display: flex; flex-direction: row; height: 20px;  align-items: center; justify-content: center; gap: 10px; background-color: #fee2e2; padding: 0px 10px 0px 10px; border-radius: 20px;">
                            <img src="../icons/decline.png" alt="Declined" style="width: 20px; height: 20px;">
                        <p style="font-size: 12px;">Declined</p>
                        </div>
                    </td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">$100.00</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">2026-01-01</td>
                        <td style="padding: 0px; font-size: 12px; text-align: center;">
                        <img src="../icons/dots.png" alt="Dots" style="width: 15px; height: 15px;">
                    </td>
                    <td style="padding: 0px; font-size: 12px; text-align: center;">
                        <img src="../icons/visible.png" alt="Eye" style="width: 15px; height: 15px;">
                    </td>
                </tr>

                <tr style="border-bottom: 1px solid #ccc; text-align: center; background-color: #f0f0f0;">
                    <td style="font-size: 14px; width: 50px;">
                        <input type="checkbox" style="width: 15px; height: 15px;">
                    </td>
                    <td style="padding: 0px; font-size: 12px;  text-align: center; vertical-align: middle;">1234567890</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">John Doe</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">2026-01-01</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">$100</td>
                    <td style="padding: 8px; font-size: 12px; text-align: center; vertical-align: middle; display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 10px;">
                        <div style="display: flex; flex-direction: row; height: 20px; align-items: center; justify-content: center; gap: 10px; background-color: #fff2ab; padding: 0px 10px 0px 10px; border-radius: 20px;">
                            <img src="../icons/pending.png" alt="Pending" style="width: 20px; height: 20px;">
                        <p style="font-size: 12px;">Pending</p>
                        </div>
                    </td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">$100.00</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">2026-01-01</td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">
                        <img src="../icons/dots.png" alt="Dots" style="width: 15px; height: 15px;">
                    </td>
                    <td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">
                        <img src="../icons/visible.png" alt="Eye" style="width: 15px; height: 15px;">
                    </td>
                </tr>
        </tbody>
    </table>
</div>

<div id="screenBlurOverlay" class="screen-blur-overlay"></div>

<div id="cargoSidebar" class="order-sidebar">
    <h2>Place new cargo order</h2>
    <p>Enter the cargo details to add a new row to the table.</p>

    <input type="text" id="cargoOrderIdInput" placeholder="Order ID">
    <input type="text" id="cargoCustomerInput" placeholder="Customer">
    <input type="date" id="cargoDateInput">
    <input type="number" id="cargoPriceInput" placeholder="Price">
    <select id="cargoStatusInput">
        <option value="Pending">Pending</option>
        <option value="Succeeded">Succeeded</option>
        <option value="Declined">Declined</option>
    </select>

    <div class="order-sidebar-actions">
        <button class="primary" id="addbtn">Add to table</button>
        <button class="secondary" id="cargoCloseBtn">Cancel</button>
    </div>
</div>
</div>
<script src="../JS/cargo.js"></script>

</body>
</html>