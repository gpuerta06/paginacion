<?php
class Database
{
    //Esta función permite la conexión al SGBD: MySQL.
    //host = tipo de conexión local - 'localhost'.
    //dbname = nombre de la base de datos.
    //MySQL = nombre de usuario (solo para fines académicos=MySQL).
    //'' = contraseña del postgres (solo para fines académicos).

    public static function Conectar()
    {
       $pdo = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
     
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}
