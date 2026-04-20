document.addEventListener("DOMContentLoaded", function () {

    const rows = document.querySelectorAll("#warehouseTable tbody tr");
    const panel = document.getElementById("sidePanel");
    const overlay = document.getElementById("overlay");

    let totalRevenue = 0;
    let inWarehouse = 0;
    let overdue = 0;

    rows.forEach(row => {

        const status = row.querySelector(".status").innerText.trim();
        const owed = parseFloat(row.querySelector(".owed").innerText);

        totalRevenue += owed;

        if (status === "In Warehouse") inWarehouse++;
        if (status === "Overdue") overdue++;

        row.addEventListener("click", function () {
            openPanel(row);
        });
    });

    document.getElementById("totalRevenue").innerText =
        "TZs " + totalRevenue.toLocaleString() + " /=";
    document.getElementById("inWarehouse").innerText = inWarehouse;
    document.getElementById("overdueCount").innerText = overdue;

    function openPanel(row) {
        const cells = row.cells;

        document.querySelector(".panel-content").innerHTML = `
            <p><strong>Customer ID:</strong> ${cells[0].innerText}</p>
            <p><strong>Product ID:</strong> ${cells[1].innerText}</p>
            <p><strong>Price:</strong> $${cells[2].innerText}</p>
            <p><strong>Stock:</strong> ${cells[3].innerText} units</p>
            <p><strong>Type:</strong> ${cells[4].innerText}</p>
            <p><strong>Status:</strong> ${cells[5].innerText}</p>
            <p><strong>Arrival Date:</strong> ${cells[6].innerText}</p>
            <p><strong>Total Payable:</strong> $${cells[7].innerText}</p>
        `;

        panel.classList.add("active");
        overlay.classList.add("active");
    }

    window.closePanel = function () {
        panel.classList.remove("active");
        overlay.classList.remove("active");
    };

    overlay.addEventListener("click", closePanel);

});


console.log("Row clicked");
