<?php

error_reporting(E_ALL);
ini_set('display_errors', true);


$db = new PDO('sqlite:' . __DIR__ . '/database.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "SELECT * FROM tree";

try {
    $statement = $db->query($sql);
} catch (PDOException $exception) {
    die($exception->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tree</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>Tree</h1>
    <ul class="list-group">
        <?php
        if ($statement):
            while ($row = $statement->fetch()): ?>
                <li class="list-group-item">
                    <?= $row['id'] ?> |
                    <?= $row['name'] ?> |
                    <?= $row['type'] ?> |
                </li>
            <?php endwhile;
        endif; ?>
    </ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script>
    $(function () {

    });
</script>
</body>
</html>