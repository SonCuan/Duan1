<?php

include_once "view/header.php";
if (isset($_GET['act']) && $_GET['act'] != "") {
    switch ($_GET['act']) {
        case 'home':
            include_once "view/home.php";
            break;
        case "productDentail":
            //code
            break;
        case "shop":
            include_once "view/shop.php";
            break;
        case "cart":
            include_once "view/cart.php";
            break;
        case "blog":
            include_once "view/blog.php";
            break;
        case "login":
            include_once "view/login.php";
            break;
        case "gioithieu":
            include_once "view/gioithieu.php";
            break;
        case "category-list":
            include_once "view/category-list.php";
            break;
        case "product":
            include_once "view/product.php";
            break;
        case "quenmk":
            include_once "view/quenmk.php";
            break;
        case "checkout":
            include_once "view/checkout.php";
            break;
        case "donhangcuaban":
            include_once "view/donhangcuaban.php";
            break;
        case "dangky":
            include_once "view/dangky.php";
            break;
        default:
            ///
            echo "<h1>Fooder not file 404</h1>";
            break;
    }
} else {
    include_once "view/home.php";
}
include_once "view/footer.php";
