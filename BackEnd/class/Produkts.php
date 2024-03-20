<?php
class Produkts
{
    private static $db;
    private static $table = 'Products';

    public static function init()
    {
        self::$db = Database::getInstance();
    }

    public function __construct()
    {
        $this->db = new Database;
    }
    public static function getprodukts()
    {
        $db = Database::getInstance();
        return $db->get(self::$table);
    }
    public static function getprodukt($id)
    {
        $db = self::$db;
        return $db->get(self::$table, $id);
    }
    public static function getProductsWithCategories()
    {
        $db = Database::getInstance();
        $sql = "SELECT p.id, 
        p.name AS product_name, 
        p.description, 
        p.price, 
        p.image_url, 
        c.name AS category_name
        FROM products p
        JOIN categories c ON p.category_id = c.id";
        return self::$db->query($sql)->fetchAll();
    }
}
