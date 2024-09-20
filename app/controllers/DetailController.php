<?php

class DetailController extends Controller {
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductsModel();
    }

    public function index($id = null)
    {
        if ($id === null && isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $product = $this->productModel->getUserById((int)$id);

        $this->view('detail/index', ['product' => $product]);
    }
}
