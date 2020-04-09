<?php
class Conexion{

    public function conectar(){
        $pdo = new PDO("mysql:host=localhost;dbname=rincondelgamer", "root", "");
        return $pdo;
    }

}