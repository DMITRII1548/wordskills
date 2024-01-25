<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
<body>
    <?php
    @require_once './app/models/User.php';
    $user = new User();
    ?>
    <table width="500px" border="1px">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($user->all() as $user) { ?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['password'] ?></td>
                <td><a href="./show.php?id=<?php echo $user['id'] ?>">Show</a></td>
                <td><a href="./edit.php?id=<?php echo $user['id'] ?>">Edit</a></td>
                <td><a style="color: red;" href="./app/http/contollers/user/DestroyController.php?id=<?php echo $user['id'] ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>