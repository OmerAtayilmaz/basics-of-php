<!--bootstrap navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item <?php if ($uri === '/' ) echo 'active' ?>">
                <a class="nav-link" href="/php/tutorial/vid12/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?= (urlIs($root . 'about')) ? 'active' : '' ?>">
                <a class="nav-link" href="/php/tutorial/vid12/about">About us</a>
            </li>
            <li class="nav-item <?=  ($uri === '/contact') ? 'active' : '' ?>">
                <a class="nav-link" href="/php/tutorial/vid12/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>