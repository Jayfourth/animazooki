//menu toggle
// let toggle = document.querySelector('.toggle');
// let navigation = document.querySelector('.navigation');
// let main = document.querySelector('.mainAdmin');

// toggle.onclick = function() {
//     navigation.classList.toggle('active');
//     main.classList.toggle('active');
// }

// add hovered class on selected list items
let list = document.querySelectorAll('.navigation li');
function activelink() {
    list.forEach((item) =>
        item.classList.remove('hovered'));
    this.classList.add('hovered');
}
list.forEach((item) =>
    item.addEventListener('mouseover', activelink));

// ADMIN
var container = $('.mainAdmin');
var adminDashboard = $('#adminDashboard');
var adminProducts = $('#adminProducts');
var adminCustomers = $('#adminCustomers');
var adminOrders = $('#adminOrders');
var adminUsers = $('#adminUsers');
var adminAccess = $('#adminAccess');
var adminSignout = $('#adminSignout');

function loadContent(content) {
    $.ajax({
        type: 'POST',
        url: content,
        success: (result) => {
            var element = $('<div/>');
            element.html(result);
            container.empty();
            container.prepend(element);
        }
    })

}

adminDashboard.on('click', function (e) {
    loadContent('/controllers/admin/admin_dashboard.php');
    e.preventDefault();
});
adminProducts.on('click', function (e) {
    loadContent('/controllers/admin/admin_products.php');
    e.preventDefault();
    productsFetch();
});
adminCustomers.on('click', function (e) {
    loadContent('/controllers/admin/admin_customers.php');
    e.preventDefault();
    customersFetch();
});
adminOrders.on('click', function (e) {
    loadContent('/controllers/admin/admin_orders.php');
    e.preventDefault();
    ordersFetch();
});
adminUsers.on('click', function (e) {
    loadContent('/controllers/admin/admin_users.php');
    e.preventDefault();
    adminusersFetch();
});
adminAccess.on('click', function (e) {
    loadContent('/controllers/admin/admin_access.php');
    e.preventDefault();
});
adminSignout.on('click', function (e) {
    loadContent('/controllers/admin/admin_signout.php');
    e.preventDefault();
});


// FETCH

function productsFetch() {

    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_products.php",
        beforeSend: function () {
            var x = document.querySelector('#adminSpinner');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        },
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
                $(".mainAdmin").html(result);
            }
        },
        complete: function () {
            var x = document.querySelector('#adminSpinner');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        },
    });
}

function customersFetch() {

    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_customers.php",
        beforeSend: function () {
            var x = document.querySelector('#adminSpinner');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        },
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
                $(".mainAdmin").html(result);
            }
        },
        complete: function () {
            var x = document.querySelector('#adminSpinner');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        },
    });
}

function ordersFetch() {

    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_orders.php",
        beforeSend: function () {
            var x = document.querySelector('#adminSpinner');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        },
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
                $(".mainAdmin").html(result);
            }
        },
        complete: function () {
            var x = document.querySelector('#adminSpinner');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        },
    });
}

function adminusersFetch() {

    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_users.php",
        beforeSend: function () {
            var x = document.querySelector('#adminSpinner');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        },
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
                $(".mainAdmin").html(result);
            }
        },
        complete: function () {
            var x = document.querySelector('#adminSpinner');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        },
    });
}


// MODALS

$('#adminSignout').on('click', () => {
    $('#signoutModal').modal('show');
})

function addProduct() {
    $('#addProductModal').modal('show');
}


// DATABASE RELATED

$("#saveProduct").on('click', () => {
    iCode = $("#adminProdCode").val();
    iName = $("#adminProdName").val();
    iPrice = $("#adminProdPrice").val();
    iQty = $("#adminProdQty").val();
    iDescription = $("#adminProdDesc").val();

    var sJsonProduct = {
        code: iCode,
        name: iName,
        price: iPrice,
        qty: iQty,
        description: iDescription,
    };

    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_save_products.php",
        data: sJsonProduct,
        success: (result) => {
            if (result == "Product info saved!") {
                $('#addProductModal').modal('hide');
                alert(result)
                //   console.log(result);  
            } else if (result == "Incomplete") {
                alert("Please fill out all fields");
            } else if (result == "Failed to save!") {
                alert(result);
            } else {
                console.log(result);
            }
        }
    });

    iImage = $("#adminProdImage").prop('files')[0];
    var form_data = new FormData();
    form_data.append('name', iName);
    form_data.append('image', iImage);

    $.ajax({
        url: '/controllers/admin/admin_save_products_img.php',
        type: 'POST',
        data: form_data,
        contentType: false,
        processData: false,
        success: (result) => {
            if (result == "Missing image file!") {
                alert(result);
            } else if (result == "Image file saved!") {
                productsFetch();
                console.log(result);
            } else if (result == "Failed to save!") {
                alert(result);
                console.log(result);
            } else {
                console.log(result);
            }
        }
    });

});
