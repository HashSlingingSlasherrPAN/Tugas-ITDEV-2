<?php

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
}

$productModel = new ProductModel();
$products = $productModel->getAll();
