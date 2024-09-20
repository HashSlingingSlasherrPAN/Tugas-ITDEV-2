<?php

class ProductsController extends Controller {
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductsModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();

        $this->view('products/index', ['products' => $products]);
    }
}
