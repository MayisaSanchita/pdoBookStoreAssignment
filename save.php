<?php
    require_once 'phpSql.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save</title>
</head>

<body>
    <?php
        $title = $_POST['title'];
        $auth = $_POST['auth'];
        $av = $_POST['av'];
        $pages = $_POST['pages'];
        $isbn = $_POST['isbn'];

        $task = array(':title' =>$title,
        ':auth' =>$auth,
        ':av' =>$av,
        ':pages' => $pages,
        'isbn' => $isbn
        );

        $sql = "INSERT INTO Books(title, auth, av, pages, isbn)
                    Values(:title, :auth, :av, :pages, :isbn)";

        $q = $pdo->prepare($sql);
        $q->execute($task);
        header('Location:index.php');
    ?>
</body>

</html>