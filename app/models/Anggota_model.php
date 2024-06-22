<?php

class Anggota_model {
   private $dbh; //DB handler
   private $stmt; //

   public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=db_perpustakaan';  //Data Source Name

        // Koneksi DB menggunakan PDO
        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }catch (PDOexception $e){
            die($e->getMessage());
        }
   }

    // Method Untuk Mengambil Data
    public function getAllAnggota(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM anggota');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}