<?php

class Category
{
    private $db;
    private static $table = 'category';

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getCategories()
    {
        return $this->db->get(self::$table);
    }
}