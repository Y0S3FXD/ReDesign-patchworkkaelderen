<?php

class Database
{
    private $pdo;
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        // Load database configuration from secrets.ini file
        $config = parse_ini_file('../secrets.ini', true);
        if (isset($config['database'])) {
            $host = $config['database']['db_host'];
            $dbname = $config['database']['db_name'];
            $username = $config['database']['db_user'];
            $password = $config['database']['db_password'];
        } else {
            die("Database configuration not found.");
        }

        $dsn = "mysql:host={$host};dbname={$dbname}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ];

        try {
            $this->pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
    

    public function query($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
    public function insert($table, $data)
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";

        $stmt = $this->query($sql, $data);
        return $stmt->rowCount();
    }
    public function delete($table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id = ?";
        $stmt = $this->query($sql, [$id]);
        return $stmt->rowCount();
    }
    public function get( $table, $where = [] )
    {
        $sql = "SELECT * FROM {$table}";
        if ( !empty($where) ) {
            $sql .= " WHERE " . key($where) . " = ?";
        }
        $stmt = $this->query($sql, $where);
        return $stmt->fetchAll();
    }
    public function update($table, $data, $id_name, $id)
    {
        $columns = '';
        foreach ($data as $key => $value) {
            $columns .= $key . ' = :' . $key . ', ';
        }
        $columns = rtrim($columns, ', ');

        $sql = "UPDATE {$table} SET {$columns} WHERE {$id_name} = {$id}";
        $stmt = $this->query($sql, $data);
        return $stmt->rowCount();
    }

    // Getter for the PDO object
    public function getPdo()
    {
        return $this->pdo;
    }
}
