<?php
include 'models/Produk.php';

class ProdukController {
    private $produkModel;

    public function __construct($pdo) {
        $this->produkModel = new Produk($pdo);
    }

    public function viewProduk() {
        return $this->produkModel->getAllProduk();
    }
}
?>
