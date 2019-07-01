
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href=index.php>Acceuil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href=<?="http://$_SERVER[HTTP_HOST]/admin/skills.php"?>>Compétences <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href=<?="http://$_SERVER[HTTP_HOST]/admin/contact.php"?>>Mails envoyés <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href=<?="http://$_SERVER[HTTP_HOST]/admin/logout.php"?>>Déconnexion</a>
        </li>
    </ul>
    </div>
</nav>
