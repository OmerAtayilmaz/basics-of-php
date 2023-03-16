<html>
    <head>
        <title><?= _yield($data["title"],"default")?> </title>
    </head>
    <link rel="stylesheet" href="<?= Path::public('public_html/bootstrap.css') ?>" >
<body class="p-0 m-0">
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= Path::root() ?>">E-Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= isActive('home') ?>" aria-current="page" href="<?= Path::root() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isActive('product') ?>" href="products">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>