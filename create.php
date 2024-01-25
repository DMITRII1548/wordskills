<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form style="margin-top: 50px; display: grid; gap: 12px; width: 200px;" method="post" action="./app/http/contollers/user/StoreController.php">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <button type="submit">Create</button>
    </form>
</body>

</html>