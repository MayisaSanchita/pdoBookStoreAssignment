<?php
     require_once 'phpSql.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./search.php" method="POST">
        <input type="text" name="Title" placeholder="Search with book title">
        <input type="submit" value="Search">
</form>
<a href="./create.php"><button>add</button></a>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>ISBN</th>
    </tr>
    <tbody>
        <?php $x=1; while ($row = $q->fetch()): ?>

                <tr>
                    <td><?php echo ($x) ?></td>
                    <td><?php echo ($row['title']) ?></td>
                    <td><?php echo ($row['auth']) ?></td>
                    <td><?php echo ($row['av']) ?></td>
                    <td><?php echo ($row['pages']) ?></td>
                    <td><?php echo ($row['isbn']) ?></td>
                    <td> <a href="<?php echo  './delete.php?id=' . (int)($row['id']); ?>">
                        <button class="btn-delete">Delete</button>
                    </a>
                  </td>
                </tr>
        <?php $x++; endwhile; ?>
    </tbody>
</table>
</body>
</html>