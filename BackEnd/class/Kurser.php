<?php
class kurser
{
    private $db;
    private static $table = 'kurser';
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getKurser()
    {
        return $this->db->get(self::$table);
    }
    public function getKursus($id)
    {
        return $this->db->get(self::$table, ['id' => $id]);
    }
    public function opretKursus($fields)
    {
        if (!self::$db->insert(self::$table, $fields)) {
            throw new Exception("Unable to create the product.");
        }
    }
    public function opdaterKursus($fields, $id)
    {
        if (!self::$db->update(self::$table, $fields, $id)) {
            throw new Exception("Unable to update the product.");
        }
    }
    public function sletKursus($id)
    {
        if (!self::$db->delete(self::$table, $id)) {
            throw new Exception("Unable to delete the product.");
        }
    }
}