<!DOCTYPE html5>
<html lang="en">
<head>
    <title>ProductDAO</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-3">
    <?php
        include_once("header.php");
        $productId = strval(round(microtime(true) * 1000));
        $productName = "";
        $productPrice = 0;
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $productId = $_GET["productId"] ?? $productId;
        $productName = $_GET["productName"] ?? "";
        $productPrice = $_GET["productPrice"] ?? 0;
        $action = $_GET["action"] ?? "Add";
    }
    ?>

    <form action="../controller/productController.php" method="post">
        <div class="mb-3">
            <label for="productId" class="form-label d-none">ID</label>
            <input type="text" class="form-control d-none" name="productId" id="productId" value="<?= $productId ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="productName" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="productName" id="productName" value="<?= $productName ?>">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Giá</label>
            <input type="number" class="form-control" name="productPrice" id="productPrice" value="<?= $productPrice ?>">
        </div>
        <button type="submit" class="btn btn-primary"><?= $action?> Product</button>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
