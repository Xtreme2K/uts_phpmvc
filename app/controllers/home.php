<?php

class Home extends Controller {
    private $produkModel;
    
    public function __construct() {
        $this->produkModel = $this->model('Produk');
    }

    public function index() {
        $data['judul'] = 'Home';
        $data['items'] = $this->produkModel->getAllProduk();
        
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
        $this->view('templates/overlay');
    }
}