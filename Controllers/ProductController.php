<?php

class ProductController
{
    public function __construct()
    {
        require_once  ROOT. '/Models/Product.php';

    }

    public function actionProduct(){
        $productList=Product::getProductList();
        include ROOT.'/Views/products.php';
        return true;
    }

    public function actionIndex(){
        include_once ROOT.'/Views/header.php';
        $this->actionProduct();
        require_once ROOT.'/Views/footer.php';
        return true;
    }



}