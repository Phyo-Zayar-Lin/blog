<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>

    <link rel="stylesheet" href="/css/app.css">
    <!-- <script src="/app.js"></script> -->

</head>

<body>
    <?php foreach($blogs as $blog):?>
    <?= $blog; ?>
    <?php endforeach;?>
</body>

</html>
