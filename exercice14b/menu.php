<?php
?>
<!-- Le menu 
<nav>
    <ul>
        <li><a href="./">Accueil</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="#">CV</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>
-->
<nav class="navbar navbar-expand-md navbar-dark" style=" background-color: rgb(83, 141, 192);">
      <a class="navbar-brand" href="#" style="font-size:35px; color:black;">Ma page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse"  id="navbarsExample04">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php" style="font-size:20px; color:black;">Accueil<span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page1.php" style="font-size:20px; color:black;">Page</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com/" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:20px; color:black;">CV</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="#" style="font-size:20px; color:black;">Action</a>
              <a class="dropdown-item" href="#" style="font-size:20px; color:black;">Another action</a>
              <a class="dropdown-item" href="#" style="font-size:20px; color:black;">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size:20px; color:black;">Contact</a>
          </li>
        </ul>
        <ul class="nav nabar-nav float-md-right">
                <?php
                    if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
                    ?>  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo ($_SESSION['prenom'] . " " . $_SESSION['nom']); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dLabel" style="left: -5px;">
                            
                                <a href="/admin" class="dropdown-item">Tableau de bord</a>
                                <div class="dropdown-diviseur"></div>
                                <a href="logout.php" class="dropdown-item">Déconnexion</a>
                            
                        </div>
                    </li>
                    <?php
                    } else {
                    ?>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Connexion</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
      </div>
               
    </nav>