<?php 
include_once "view/header.php";
if(isset($_GET['act'])&& $_GET['act'] !=""){
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
            include_once "view/home.php";
            break;
        default:
           ///
            echo "<h1>Fooder not file 404</h1>";
            break;
    }
}else{
    include_once "view/home.php";
}
include_once "view/footer.php";
