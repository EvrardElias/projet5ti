<?php
    try {
        $strConnection = "mysql:host=127.0.0.1; dbname=projet;port=3306";
        $pdo = new PDO($strConnection, "root", "Youpala2014", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
    }   catch (PDOException $e) {
        $msg = 'ERREUR PDO dans ' . $e -> getMessage();
        die($msg);
    }