<?php

class Category
{
    private static $db;
    private static $table = 'categories';
public static function init()
    {
        self::$db = Database::getInstance();
    }
    public function __construct()
    {
        $this->db = new Database;
    }
    public static function getCategories()
    {
        $db = self::$db;
        return $db->get(self::$table);
    }
}