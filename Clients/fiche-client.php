<!doctype html>
<html lang="fr">

<head>
  <title>D-Connect Help</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> <!-- https://material.io/resources/icons/?icon=devices_other&style=baseline -->
  <!-- Material Kit CSS -->
  <link href="/../css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="/../css/main.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">

      <?php include("../menu.php"); ?>
    </div>
    <div class="main-panel">

      <!-- Navbar -->
      <?php include("../navbar.php"); ?>
      <!-- fin de la Navbar -->

      <div class="content">
        <div class="container-fluid">
          <!-- Contenu de la page -->
          <div class="card d-connect">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Base de donnée client</h4>
                        </div>
                        <div class="card-body">                          
                                <!-- Section listing clients -->
                                <?php
                                // var_dump($_GET['id']);
                                $clientChoisi = (int) $_GET['id'];
                                // var_dump($clientChoisi);
                                require_once('../include/config.php');
                                $reponse = $dbh->query('SELECT * FROM clients Where id =' . $clientChoisi ); // On récupère tout le contenu de la table post
                                while ($donnees = $reponse->fetch()) {
                                    echo ('<div class="card d-connect">');
                                    echo ('<div class="card-header card-header-primary">');
                                    echo ('<h4 class="card-title"><a href="/clients/fiche-client.php/?id=' . $donnees['id'] . '">'. $donnees['client'] . '</a></h4>');
                                    echo ('</div>');
                                    echo ('<div class="card-body">' . $donnees['nomContact'] . '</div>');
                                    echo ('<div class="card-body"> Adresse : ' . $donnees['adresse'] . '</div>');
                                    echo ('<div class="card-body"> Code Postal : ' . $donnees['codePostal'] . ' ' . $donnees['ville'] . '</div>');
                                    echo ('</div>');
                                } 
                                $reponse->closeCursor(); // Termine le traitement de la requête
                                ?>
                                    <!-- Fin listing clients -->                       
                        </div>
                    </div>
          
           <!-- Fin contenu de la page -->
        </div>
        </div>
      </div>
      <footer class="footer">
      <?php include("../footer.php"); ?>
      </footer>
    </div>
  </div>
</body>

</html>