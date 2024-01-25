<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fonts/style.css">
</head>
<body>
    <?php
    require_once './app/models/User.php';
    $user = new User();
    $user = $user->find($_GET['id']);
    ?>

    id: <?php echo $user['id'] ?> <br>
    name: <?php echo $user['name'] ?> <br>
    email: <?php echo $user['email'] ?> <br>
    password: <?php echo $user['password'] ?> <br>
</body>
</html>