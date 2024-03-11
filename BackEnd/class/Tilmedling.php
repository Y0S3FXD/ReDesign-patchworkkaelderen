<?php

class Tilmelding
{
    private static $db;
    private static $table = 'Tilmeldinger';

    public static function init()
    {
        self::$db = Database::getInstance();
    }
    public function __construct()
    {
        $this->db = new Database;
    }
    public static function getTilmeldinger()
    {
        $db = self::$db;
        return $db->get(self::$table);
    }
    // Tilføjer en ny tilmelding
    public static function OpretTilmelding($fields)
    {
        if (!self::$db->insert(self::$table, $fields)) {
            throw new Exception("Unable to create the product.");
        }    }
 

    // Sletter en tilmelding
    public static function sletTilmelding($tilmeldingID)
    {
        if( !self::$db->delete(self::$table, $tilmeldingID) ) {
            throw new Exception("Unable to delete the product.");
        }
    }

    // Opdaterer tilmeldingsstatus baseret på bekræftelseskoden
    public static function bekræftTilmelding($bekraeftelsesKode)
    {
        $sql = "UPDATE Tilmeldinger SET Bekraeftet = 1 WHERE BekraeftelsesKode = ?";
        $this->db->query($sql, [$bekraeftelsesKode]);
    }

    // Hjælpefunktion til at generere en unik bekræftelseskode
    private static function genererBekraeftelsesKode()
    {
        return bin2hex(random_bytes(16)); // Genererer en 32 tegn lang hexadecimal streng
    }
}