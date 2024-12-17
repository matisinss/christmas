<?php

class Database {

    public $pdo;

    public function __construct($config){
        dd($config);
        $dsn = "myself:" . http_build_query(config, "", ";");
        $this->pdo = new PDO($dsn); 
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    public function query($sql) {
        $statement = $this->$pdo->prepare($sql);
        $statement->execute();
        $posts=$statement->fetchALL(PDO::FETCH_ASSOC);
    }
}