//  (function () {
//             var sidebar = document.getElementById('orderSidebar');
//             var overlay = document.getElementById('screenBlurOverlay');
//             var closeBtn = document.getElementById('closeSidebarBtn');
//             var addBtn = document.getElementById('addOrderBtn');

//             closeBtn.onclick = function () {
//                 sidebar.classList.remove('open');
//                 overlay.classList.remove('visible');
//             };

//             addBtn.onclick = function () {
//                 var tbody = document.querySelector('table tbody');
//                 if (!tbody) return;
//                 var orderId = document.getElementById('orderIdInput').value || '-';
//                 var customerName = document.getElementById('customerNameInput').value || '-';
//                 var packed = document.getElementById('packedInput').value || '-';
//                 var invoiced = document.getElementById('invoicedInput').value || '-';
//                 var status = document.getElementById('statusInput').value || 'Pending';
//                 var orderTotal = document.getElementById('orderTotalInput').value || '-';
//                 var createdAt = document.getElementById('createdAtInput').value || '-';

//                 var tr = document.createElement('tr');
//                 tr.style.borderBottom = '1px solid #ccc';
//                 tr.style.textAlign = 'center';
//                 tr.innerHTML = '<td style="font-size: 14px; width: 50px;"><input type="checkbox" style="width: 15px; height: 15px;"></td>' +
//                     '<td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">' + orderId + '</td>' +
//                     '<td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">' + customerName + '</td>' +
//                     '<td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">' + packed + '</td>' +
//                     '<td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">' + invoiced + '</td>' +
//                     '<td style="padding: 8px; font-size: 12px; text-align: center; vertical-align: middle;">' + status + '</td>' +
//                     '<td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">' + orderTotal + '</td>' +
//                     '<td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;">' + createdAt + '</td>' +
//                     '<td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;"><img src="icons/dots.png" alt="Dots" style="width: 15px; height: 15px;"></td>' +
//                     '<td style="padding: 0px; font-size: 12px; text-align: center; vertical-align: middle;"><img src="icons/visible.png" alt="Eye" style="width: 15px; height: 15px;"></td>' +
//                     '';
//                 tbody.appendChild(tr);
//                 document.getElementById('orderIdInput').value = '';
//                 document.getElementById('customerNameInput').value = '';
//                 document.getElementById('packedInput').value = '';
//                 document.getElementById('invoicedInput').value = '';
//                 document.getElementById('statusInput').value = 'Pending';
//                 document.getElementById('orderTotalInput').value = '';
//                 document.getElementById('createdAtInput').value = '';
//                 sidebar.classList.remove('open');
//                 overlay.classList.remove('visible');
//             };
//         })();





function openSidebar() {
    document.getElementById("orderSidebar").classList.add("open");
    document.getElementById("screenBlurOverlay").classList.add("visible");
}

function closeSidebar() {
    document.getElementById("orderSidebar").classList.remove("open");
    document.getElementById("screenBlurOverlay").classList.remove("visible");
}

function addOrder() {
    const tbody = document.getElementById("ordersTableBody");

    const orderId = document.getElementById("orderIdInput").value || "-";
    const customerName = document.getElementById("customerNameInput").value || "-";
    const packed = document.getElementById("packedInput").value || "-";
    const invoiced = document.getElementById("invoicedInput").value || "-";
    const status = document.getElementById("statusInput").value || "-";
    const orderTotal = document.getElementById("orderTotalInput").value || "-";
    const createdAt = document.getElementById("createdAtInput").value || "-";

    const row = `
        <tr>
            <td><input type="checkbox"></td>
            <td>${orderId}</td>
            <td>${customerName}</td>
            <td>${packed}</td>
            <td>${invoiced}</td>
            <td>${status}</td>
            <td>${orderTotal}</td>
            <td>${createdAt}</td>
            <td><img src="icons/dots.png" width="15"></td>
            <td><img src="icons/visible.png" width="15"></td>
        </tr>
    `;

    tbody.innerHTML += row;

    closeSidebar();
}