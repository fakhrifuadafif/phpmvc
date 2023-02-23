<?php
class mahasiswa_model{

    private $dbh;//database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try {
            $this->dbh = new PDO($dsn, 'root', 'mysql');
        } catch(PDOException $e){
            die($e->getMessage());
        }
        
        }
        
        public function getAllMahasiswa()
        
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }   
 

    // private $mhs = [
    //     [
    //         "nama"=> "fakhri",
    //         "nrp"=> "17180008",
    //         "email"=> "fakhrifuad57@gmail.com",
    //         "jurusan"=>"TI"

    //     ],
    //     [
    //         "nama"=> "fuad",
    //         "nrp"=> "17180009",
    //         "email"=> "fakhrifuad58@gmail.com",
    //         "jurusan"=>"TI"
    //     ],
    //     [
    //         "nama"=> "afif",
    //         "nrp"=> "17180010",
    //         "email"=> "fakhrifuad59@gmail.com",
    //         "jurusan"=>"TI"
    //         ]
    // ];