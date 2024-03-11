    <?php
    class kurser
    {

        private static $db;
        private static $table = 'kurser';

        public static function init()
        {
            self::$db = Database::getInstance();
        }

        public function __construct()
        {
            $this->db = new Database;
        }
        public static function getKurser()
        {
            $db = Database::getInstance();
            return $db->get(self::$table);
        }
        public static function getKursus($id)
        {
            $db = self::$db;
            return $db->get(self::$table, ['KursusID' => $id]);
        }
        public static function opretKursus($fields)
        {
            if (!self::$db->insert(self::$table, $fields)) {
                throw new Exception("Unable to create the product.");
            }
        }
        public static function opdaterKursus($fields, $id_name, $id)
        {
            $affectedRows = self::$db->update(self::$table, $fields, $id_name, $id);

            // Check if any row was actually updated
            if ($affectedRows > 0) {
                throw new Exception("The kursus has been updated successfully.");
            } else {
                // If no rows were affected, it means the data was already up to date or the kursus does not exist
                throw new Exception("No updates were necessary or the kursus does not exist.");
            }
        }
        public static function sletKursus($id)
        {
            if (!self::$db->delete(self::$table, $id)) {
                throw new Exception("Unable to delete the product.");
            }
        }
    }
