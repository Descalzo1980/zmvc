<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<table border="1px">
    <tr>
        <th>Name</th>
    </tr>
    <tr>
       <?php foreach ($items as $item): ?>
            <td><?php echo $item['title']; ?></td>
           </tr>
        <?php endforeach; ?>
</table>

<a href="/add.php">Добавить фото</a>
</body>
</html>

