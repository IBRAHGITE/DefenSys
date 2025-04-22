<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 py-3">
  <div class="container-fluid">
    <h2 class="navbar-brand mb-0" style="margin-right:70px;">DefenSys</h2>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <!-- Liens de navigation au centre -->
      <ul class="navbar-nav mb-2 mb-lg-0 ms-4 ">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="gestionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gestion
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="gestionDropdown">
  
              <!-- Sous-menu Biens -->
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Biens</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Véhicules</a></li>
                  <li><a class="dropdown-item" href="#">Motos</a></li>
                  <li><a class="dropdown-item" href="#">Machines</a></li>
                </ul>
              </li>
  
              <!-- Sous-menu Activités -->
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Activités</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Vol drone</a></li>
                  <li><a class="dropdown-item" href="#">Surveillance statique</a></li>
                  <li><a class="dropdown-item" href="#">Escorte</a></li>
                </ul>
              </li>
  
            </ul>
          </li>
        </ul>
        <li class="nav-item">
          <a class="nav-link" href="./users&var=index">Fonctionnalités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Àpropos</a>
        </li>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="gestionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Configuraton
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="gestionDropdown">
              <li class="-submenu">
                <a class="dropdown-item" href="./?page=users&var=index">Liste des utilisateurs </a>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Log des Utilisateurs</a>
              </li>
            </ul>
          </li>
        </ul>
      </ul>
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <!-- Profil complètement à droite -->
  <div class="d-flex ms-auto">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profilDropdown">
              <li><a class="dropdown-item" href="#">Mon compte</a></li>
              <li><a class="dropdown-item" href="#">Paramètres</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="#">Déconnexion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<style>
/* Positionnement des sous-dropdowns */
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: 0.1rem;
  display: none;
  position: absolute;
}

.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}
</style>

