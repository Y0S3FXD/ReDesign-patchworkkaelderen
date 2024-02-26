<?php
 require_once 'Database.php';

class Tilmelding
{
    private $db;
    private static $table = 'Tilmeldinger';
    public function __construct()
    {
        $this->db = new Database;
    }

    // Tilføjer en ny tilmelding
    public function CreateTilmelding($fields)
    {
        if (!self::$db->insert(self::$table, $fields)) {
            throw new Exception("Unable to create the product.");
        }    }
 

    // Sletter en tilmelding
    public function sletTilmelding($tilmeldingID)
    {
        if( !self::$db->delete(self::$table, $tilmeldingID) ) {
            throw new Exception("Unable to delete the product.");
        }
    }

    // Opdaterer tilmeldingsstatus baseret på bekræftelseskoden
    public function bekræftTilmelding($bekraeftelsesKode)
    {
        $sql = "UPDATE Tilmeldinger SET Bekraeftet = 1 WHERE BekraeftelsesKode = ?";
        $this->db->query($sql, [$bekraeftelsesKode]);
    }

    // Hjælpefunktion til at generere en unik bekræftelseskode
    private function genererBekraeftelsesKode()
    {
        return bin2hex(random_bytes(16)); // Genererer en 32 tegn lang hexadecimal streng
    }
}

// Eksempel på oprettelse og brug af Tilmelding klassen
// $db = new Database(); // Antager at Database klassens konstruktør er ændret til public
// $tilmelding = new Tilmelding($db);

// $tilmelding->tilfoejTilmelding(1, 'John Doe', 'john@example.com', '123456789');
