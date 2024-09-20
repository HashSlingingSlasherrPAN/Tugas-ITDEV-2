<?php


class Model
{
    protected $table = '';
    protected $primaryKey = '';

    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    
}
