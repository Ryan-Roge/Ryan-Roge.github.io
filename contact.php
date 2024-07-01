<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <?php include('./includes/header.php') ?>
    </header>

    <form action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="mail">E-mail:</label>
        <input type="mail" name="mail" id="mail">
        <label for="topic">Topic:</label>
        <input type="text" name="topic" id="topic">
        <label for="description">Description:</label>
        <input type="text" name="description" id="description">
    </form>

</body>
</html>