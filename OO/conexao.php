<?php
/**
 * Created by PhpStorm.
 * User: wagner macedo
 * Date: 30/08/2016
 * Time: 21:35
 */
try
{
    $conn = new \PDO("mysql:host=localhost;dbname=test","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(\PDOException $e)
{
    die("N�o foi poss�vel estabelecer conex�o com o banco de dados! Error: ".$e->getMessage());
}
?>