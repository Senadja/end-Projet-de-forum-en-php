<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="welcome.php">Les p'tites bricoles :D</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publish-question.php">
            Publier une question
            <?php 
              if(!isset($_SESSION['auth'])){
                echo '<span class="badge bg-warning text-dark">Connectez-vous</span>';
              }
            ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my-questions.php">Mes questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ChatApp/chat.php">Chat</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="bricolons-ensemble.php">Bricolons ensemble</a>
        </li>
        <?php 
          if(isset($_SESSION['auth'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="profile.php?id=<?= $_SESSION['id']; ?>">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="actions/users/logoutAction.php">Déconnexion</a>
            </li>
            <?php
          } else {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Connexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Inscription</a>
            </li>
            <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

<style>
.nav-link {
  position: relative;
  display: inline-block;
  transition: color 0.3s ease;
}

.nav-link::before {
  content: '';
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #007bff;
  visibility: hidden;
  transform: scaleX(0);
  transition: all 0.3s ease-in-out;
}

.nav-link:hover::before {
  visibility: visible;
  transform: scaleX(1);
}

.nav-link:hover {
  color: #007bff;
}
</style>
