(function () {

    var sidebar = document.getElementById('cargoSidebar');
    var overlay = document.getElementById('screenBlurOverlay');
    var openBtn = document.getElementById('openCargoSidebar');
    var addBtn = document.getElementById('cargoAddBtn');
    var closeBtn = document.getElementById('cargoCloseBtn');

    openBtn.onclick = function () {
        sidebar.classList.add('open');
        overlay.classList.add('visible');
    };

    closeBtn.onclick = function () {
        sidebar.classList.remove('open');
        overlay.classList.remove('visible');
    };

    addBtn.onclick = function () {
    const data = new FormData();

    data.append("order_id", document.getElementById("cargoOrderIdInput").value);
    data.append("customer", document.getElementById("cargoCustomerInput").value);
    data.append("date", document.getElementById("cargoDateInput").value);
    data.append("price", document.getElementById("cargoPriceInput").value);
    data.append("status", document.getElementById("cargoStatusInput").value);

    fetch("../api/add_cargo.php", {
        method: "POST",
        body: data
    })
    .then(res => res.text())
    .then(response => {

        if (response === "success") {
            alert("Cargo saved successfully");
            location.reload();
        } else {
            alert("Error saving cargo");
        }

    });

};











//         var tbody = document.getElementById('cargoTableBody');
//         if (!tbody) return;

//         var orderId = document.getElementById('cargoOrderIdInput').value || '-';
//         var customer = document.getElementById('cargoCustomerInput').value || '-';
//         var date = document.getElementById('cargoDateInput').value || '-';
//         var price = document.getElementById('cargoPriceInput').value || '-';
//         var status = document.getElementById('cargoStatusInput').value || 'Pending';

//         var tr = document.createElement('tr');
//         tr.innerHTML =
//             '<td><input type="checkbox"></td>' +
//             '<td>' + orderId + '</td>' +
//             '<td>' + customer + '</td>' +
//             '<td>' + date + '</td>' +
//             '<td>' + price + '</td>' +
//             '<td>' + status + '</td>' +
//             '<td><img src="icons/dots.png" width="15"></td>' +
//             '<td><img src="icons/visible.png" width="15"></td>';

//         tbody.appendChild(tr);

//         sidebar.classList.remove('open');
//         overlay.classList.remove('visible');
//     };

})();