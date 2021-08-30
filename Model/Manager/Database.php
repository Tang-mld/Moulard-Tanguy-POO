<?php

abstract class Database {

    protected $bdd;

    private $host = 'localhost';
    private $dbName = 'exam-mvc';
    private $user = 'root';
    private $password = '';

    public function __construct(){
        try {
            $this->bdd = new \PDO('mysql:dbname='.$this->dbName.'; charset=utf8; host='.$this->host,
                $this->user, $this->password);
        } catch (\PDOException $e){
            throw $e;
        }
    }
}

?>