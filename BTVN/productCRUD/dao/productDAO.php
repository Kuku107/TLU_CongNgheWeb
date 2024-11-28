<?php

require_once(__DIR__ . "/../model/product.php");

class ProductDAO
{
    public static $products = [];

    public function __construct() {
        if (!isset($_SESSION["products"]))
            $_SESSION["products"] = [];
        self::$products = $_SESSION["products"];
    }

    public function addProduct(Product $product)
    {
        foreach (self::$products as $key => $value)
            if ($value->getId() === $product->getId()) {
                self::$products[$key] = $product;
                $_SESSION["products"] = self::$products;
                return;
            }

        self::$products[] = $product;
        $_SESSION["products"] = self::$products;
    }

    public function deleteProduct($id)
    {
        foreach (self::$products as $key => $product)
            if ($product->getId() === $id) {
                unset(self::$products[$key]);
                self::$products = array_values(self::$products);
                break;
            }
        $_SESSION["products"] = self::$products;
    }
}

?>
