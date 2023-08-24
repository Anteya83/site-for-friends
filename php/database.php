<?php
require_once 'config.php';
class Database {
    private static $db;
    private $pdo;
    

    private function __construct() {
        try {
            $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
        }
        catch (PDOException $e){
            echo 'Ошибка при подключении к базе данных: '.$e->getMessage();
              
        }
    }
   public static function getDBO() {
    if (!self::$db) self::$db = new Database();
    return self::$db;
    
   }
   public function getRowByWhere(string $table_name, string $where, $values = []){
     $sql = "SELECT * FROM $table_name WHERE $where";
     $query = $this->pdo->prepare($sql);
     $query->execute($values);
     $result =$query->fetch();
     if ($result) return $result;
     return [];
   }
   public function getRowById(string $table_name, int $id) : array{
    return $this->getRowByWhere($table_name, '`id` = ?', [$id]);
   }
   public function __destruct(){
    $this->pdo = null;
   }
}
 