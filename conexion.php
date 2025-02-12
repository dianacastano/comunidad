<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'pruebapractica';
    private $username = 'root';
    private $password = '1234';
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            echo 'Exception: ',  $e->getMessage(), "\n";
        }

        return $this->conn;
    }
}
?>
