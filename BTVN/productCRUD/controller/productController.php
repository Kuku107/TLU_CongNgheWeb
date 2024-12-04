<?php
    include_once("../view/header.php");
    require_once("../model/product.php");
    require_once("../utils/EscapeString.php");
    require_once("../dao/productDAO.php");
    session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = escapeString($_POST["productId"]) ?? "";
        $name = escapeString($_POST["productName"]) ?? "";
        $price = escapeString($_POST["productPrice"]) ?? 0;
        $product = new Product($id, $name, $price);
        $products = new ProductDAO();
        $products -> addProduct($product);
        header ("Location: ../index.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["action"]) && $_GET["action"] === "delete") {
        $products = new ProductDAO();
        $products -> deleteProduct($_GET["productId"]);
        header ("Location: ../index.php");
        exit();
    }

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["action"]) && $_GET["action"] === "Edit") {
    $productId = $_GET["productId"];
    $productName = urlencode($_GET["productName"]);
    $productPrice = $_GET["productPrice"];
    $action = $_GET["action"];

    header("Location: ../view/addProductView.php?productId=$productId&productName=$productName&productPrice=$productPrice&action=$action");
    exit();
}

?>
