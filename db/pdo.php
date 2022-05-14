<?php

class MySQLConnection {
   private $pdo;
   private const MYSQL_HOST = 'localhost';
   private const MYSQL_DATABASE = 'tsdb';
   private const MYSQL_USER = 'tsdbUser';
   private const MYSQL_PASSWD = 'tsdbPass';

   public function connect() {
      if ($this->pdo == null) {
         $this->pdo = new \PDO("mysql:host=". self::MYSQL_HOST . ";dbname=". self::MYSQL_DATABASE, self::MYSQL_USER, self::MYSQL_PASSWD);
      }
      return $this->pdo;
   }
}
?>
