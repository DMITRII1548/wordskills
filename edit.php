<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        require_once './app/models/User.php';

        $id = (int)$_GET['id'];

        $user = new User();
        $user = $user->find($id);
    ?>

    <form style="margin-top: 50px; display: grid; gap: 12px; width: 200px;" method="post" action="./app/http/contollers/user/UpdateController.php?id=<?php echo $id ?>">
        <input type="text" name="name" placeholder="name" value="<?php echo $user['name']?>">
        <input type="text" name="email" placeholder="email" value="<?php echo $user['email']?>">
        <input type="text" name="password" placeholder="password" value="<?php echo $user['password']?>">
        <button type="submit">Update</button>
    </form>
</body>

</html>