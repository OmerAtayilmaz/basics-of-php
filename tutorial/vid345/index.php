<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example page</title>
</head>
<body>
<?php $name="OMER" ?>
<h1>
    <?php
        echo "Hello World!";
        echo "<br/>";
        echo "Hello" . " " . "FROM PHP";
        echo "<br/>HELLO $name"; // değişkeni algılar
        echo 'hello $name'; //kod yazarken tek tırnak kullanırsan değişkeni algılamaz
    ?>
</h1>
</body>
</html>