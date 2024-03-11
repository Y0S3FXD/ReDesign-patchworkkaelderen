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
            if (!self::$db->update(self::$table, $fields, $id_name, $id)) {
                throw new Exception("Unable to update the product.");
            }          
        }
        public static function sletKursus($id)
        {
            if (!self::$db->delete(self::$table, $id)) {
                throw new Exception("Unable to delete the product.");
            }
        }
    }
