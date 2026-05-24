<?php

class db{

private $host="localhost";
private $dbname="company";
private $user="root";
private $password="root";
private $connection=null;

function __construct(){

$this->connection = new PDO(
"mysql:host=".$this->host.";dbname=".$this->dbname,
$this->user,
$this->password
);

}

function get_data($table_name,$condition=1){

return $this->connection->query(
"SELECT * FROM $table_name WHERE $condition"
);

}

function delete_data($table_name,$condition){

return $this->connection->query(
"DELETE FROM $table_name WHERE $condition"
);

}

function get_connection(){

return $this->connection;

}

}