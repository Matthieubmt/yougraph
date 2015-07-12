<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <title>Yougraph - Dev</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <style style="display:none">/* Sticky footer styles
        -------------------------------------------------- */


        .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        /* Set the fixed height of the footer here */
        height: 60px;
        background-color: #f5f5f5;
        }


        /* Custom page CSS
        -------------------------------------------------- */
        /* Not required for template or sticky footer method. */

        body > .container {
        padding: 60px 15px 0;
        }
        .container .text-muted {
        margin: 20px 0;
        }

        .footer > .container {
        padding-right: 15px;
        padding-left: 15px;
        }

        code {
        font-size: 80%;
        }

    </style>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    </head>

      <body>

    <!-- Fixed navbar -->


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Yougraph</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon compte <span class="caret"></span></a>
          <?php if(!$Auth->islog()) { ?>
          <ul class="dropdown-menu">
            <li><a href="register.php">Inscription</a></li>
            <li><a href="login.php">Connexion</a></li>
          </ul>
          <?php }else{ ?>
          <ul class="dropdown-menu">
            <li><a href="#">Mes informations</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Deconnexion</a></li>
          </ul>
          <?php } ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>