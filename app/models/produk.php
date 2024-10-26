<?php
class Produk {
    private $db;
    private $table = 'produk';

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllProduk() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }
}
?>
