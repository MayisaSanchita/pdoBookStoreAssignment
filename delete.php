<?php
    require_once 'phpSql.php';

        $Id = $_GET['id'];
        echo $Id;
        $deleteStep = $pdo->prepare("DELETE FROM Books WHERE id = $Id");
        $deleteStep->execute(); 
        header('Location:index.php');

?>