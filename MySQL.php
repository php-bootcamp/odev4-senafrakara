<?php 

class MySQL extends SQL{
    use SQLCrud;

    private $host;
    private $port;
    private $username;
    private $database;
    private $pass;

    public function __construct($host,$username,$password,$db)
    {
        $this->host=$host;
        $this->username=$username;
        $this->pass=$password;
        $this->database=$db;

    }

    public function __destruct()
    {
        
    }


}
?>