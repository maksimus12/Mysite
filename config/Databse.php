<?php 

class Database{

    private $pdo;
    private $stmt;

    public function __construct($dbInfo, $username = 'root', $password = '')
    {
        
        $dsn = 'mysql:' . http_build_query($dbInfo, '', ';');

        $this->pdo = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]);
    }
    public function query($sql, $params = []){
      
        $this->stmt = $this->pdo->prepare($sql);
        $this->stmt->execute($params);
        return $this;
    }

    public function find(){
        return $this->stmt->fetchAll();
    }

    public function fetchOrFail(){
        $result = $this->find();
        if(!$result){
            abort();
        }
        return $result;
    }
}