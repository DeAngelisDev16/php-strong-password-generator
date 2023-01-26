<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>
    <?php
    $password = ($_GET['password']);
    ?>





    <form action="index.php" method="get">
        <input type="text" name="password">
        <button type="submit">Clicca</button>

    </form>

    <h2>
        <?php
        echo strlen($password);
        ?>

    </h2>


</body>

</html>