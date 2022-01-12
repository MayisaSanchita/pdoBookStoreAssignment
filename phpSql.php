<?php
     require_once 'config.php';
     //$myPDO = new PDO('mysql:host=localhost;dbname=AssignmentPDO', 'root', '');
    try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $sql = 'SELECT id, title, auth, av, pages, isbn FROM Books';
    
    $q = $pdo->query($sql);
  
    $q->setFetchMode(PDO::FETCH_ASSOC);
    // echo "$dbname connect";
    }catch(PDOException $err){
        die("failed $dbname: ".$err->getMessage());
    }
?>