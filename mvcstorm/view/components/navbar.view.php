<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/#">My Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item <?= $_SERVER["REQUEST_URI"] === '/' ? 'active' : '' ?>">
                <a class="nav-link" href="/#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  <?= $_SERVER["REQUEST_URI"]  === '/product' ? 'active' : '' ?>">
                <a class="nav-link" href="/product">Products</a>
            </li>
            <li class="nav-item  <?= $_SERVER["REQUEST_URI"]  === '/references' ? 'active' : '' ?>">
                <a class="nav-link" href="/references">References</a>
            </li>
            <li class="nav-item  <?= $_SERVER["REQUEST_URI"]  === '/trends' ? 'active' : '' ?>">
                <a class="nav-link" href="/trends">Trends</a>
            </li>
            <li class="nav-item  <?= $_SERVER["REQUEST_URI"]  === '/contact' ? 'active' : '' ?>">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item  <?= $_SERVER["REQUEST_URI"]  === '/users' ? 'active' : '' ?>">
                <a class="nav-link" href="/users">Users</a>
            </li>
            <li class="nav-item  <?= $_SERVER["REQUEST_URI"]  === '/reverse' ? 'active' : '' ?>">
                <a class="nav-link" href="/reverse">Reverse</a>
            </li>
        </ul>
        <div class="authorization">
            <?php if($_SESSION["user"] ?? false) : ?>
                <div class="btn btn-success"><?=$_SESSION["user"]["name"]?></div>
            <?php else: ?>
                <div class="btn btn-warning">Login</div>
                <a class="btn btn-info" href="/register">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
