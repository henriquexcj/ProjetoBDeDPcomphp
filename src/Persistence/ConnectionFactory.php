<?php

namespace App\Persistence;

class ConnectionFactory{

    private $_conn;
    private $_user = "Gus";
    private $_pass = "b4t4t4";
    private $_dbname = "Clima";
    private $_host = "localhost";

    function __construct(){}

    public function getInstance(){
        try{
            if(!isset($this->_conn)){
                $this->_conn = new \PDO("mysql:host=172.17.0.2;dbname=cursoesp32","charset=UTF8","root","admin123");
                return $this->_conn;
            }
            else{
                return $this->_conn;
            }
        }
        catch(\PDOException $e){
            $e->getMessage();
        }
    }
}