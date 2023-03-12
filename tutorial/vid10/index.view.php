
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array page</title>
</head>
<body>
<?php foreach ($filteredData as $item) : ?>
    <li><?= $item["id"] . '. Kullanıcının Adi: ' . $item["name"] . ' - Email: <strong>' . $item["email"] . '</strong>' ?></li>
<?php endforeach; ?>
</body>
</html>