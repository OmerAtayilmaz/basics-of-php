<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item <?= $uri === '/' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  <?= $uri === '/references' ? 'active' : '' ?>">
                <a class="nav-link" href="references">References</a>
            </li>
            <li class="nav-item  <?= $uri === '/trends' ? 'active' : '' ?>">
                <a class="nav-link" href="trends">Trends</a>
            </li>
            <li class="nav-item  <?= $uri === '/contact' ? 'active' : '' ?>">
                <a class="nav-link" href="contact">Contact</a>
            </li>
            <li class="nav-item  <?= $uri === '/reverse' ? 'active' : '' ?>">
                <a class="nav-link" href="reverse">Reverse</a>
            </li>
        </ul>
    </div>
</nav>
