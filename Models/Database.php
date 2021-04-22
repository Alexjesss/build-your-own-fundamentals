<?php
declare(strict_types=1);

class Database
{
    private string $dbhost = "localhost:3306";
    private string $dbuser = "root";
    private string $dbpass = "";
    private string $db = "mvc";

    public function openConnection(): PDO
    {
        $databaseInfo = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->db;
        $pdo = new PDO($databaseInfo, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
