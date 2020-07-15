<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Hello <?php echo htmlspecialchars($name) ?>!</h1>
    <p>Welcome to my MVC</p>
    <ul>
        <?php foreach ($colors as $color) { ?>
            <li><?php echo htmlspecialchars($color); ?></li>
        <?php } ?>
    </ul>
</body>

</html>