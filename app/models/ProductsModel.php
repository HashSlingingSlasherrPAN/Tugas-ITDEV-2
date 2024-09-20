<?php

class ProductsModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';


    public function getAll()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function getUserById(int $id): array
    {
        $this->db->query("SELECT * FROM $this->table WHERE $this->primaryKey = :value");
        $this->db->bind(':value', $id);
        return $this->db->single();
    }
}
