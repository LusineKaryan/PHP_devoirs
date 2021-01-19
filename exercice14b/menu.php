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
            <a class="nav-link" href="#" style="font-size:20px; color:black;">Accueil<span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size:20px; color:black;">Blog</a>
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
        <?php
        if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
        echo "<h3>" . $_SESSION['prenom'] . " " . $_SESSION['nom'] ."</h3>";
        echo "<p><a href='logout.php'>Se déconnecter</a></p>"; 
        }
        else
        {
        echo "<p><a href='login.php'>Se connecter</a></p>";
        }
        ?>     
      </div>
               
    </nav>