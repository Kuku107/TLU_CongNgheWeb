<!DOCTYPE html5>
<html lang="en">
    <head>
        <title>CNW</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="p-3">
    <?php

        include_once("view/header.php");
        require_once("model/product.php");
        require_once("utils/EscapeString.php");
        require_once("dao/productDAO.php");
        session_start();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = escapeString($_POST["productId"]) ?? "";
            $name = escapeString($_POST["productName"]) ?? "";
            $price = escapeString($_POST["productPrice"]) ?? 0;
            $product = new Product($id, $name, $price);
            $products = new ProductDAO();
            $products -> addProduct($product);
        }

        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["action"]) && $_GET["action"] === "delete") {
            $products = new ProductDAO();
            $products -> deleteProduct($_GET["productId"]);
        }

        $products = new ProductDAO();
    ?>
    <a
        class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
        href="view/addProductView.php">
    <button class="btn btn-success">
            Thêm mới
    </button>
    </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá thành</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (ProductDAO::$products as $product) {?>
                <tr>
                    <td class="fw-bold"><?= $product -> getName() ?></td>
                    <td><?= $product -> getPrice() ?>$</td>
                    <td>
                        <a href="view/addProductView.php?productId=<?= $product->getId() ?>&productName=<?= urlencode($product->getName()) ?>&productPrice=<?= $product->getPrice() ?>&action=Edit">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#2854C5">
                                    <path d="M120-120v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm584-528 56-56-56-56-56 56 56 56Z"/>
                                </svg>
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="index.php?action=delete&productId=<?= $product->getId() ?>">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA3323">
                                    <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm80-160h80v-360h-80v360Zm160 0h80v-360h-80v360Z"/>
                                </svg>
                            </button>
                        </a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
