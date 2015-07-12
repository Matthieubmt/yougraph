<?php
include('libs/loader.php');

if(!$Auth->islog()) {
    } else {
      header('Location: index.php');
    }

    
if(isset($_POST['submit'])){
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$password = sha1($pass);
	$MyPDO->query("INSERT INTO users SET  prenom='$prenom', nom='$nom', password='$password', email='$email'");
 		$success = '<div class="notification success">
						<p><span>Inscription reussite!</span> </p>
					</div>';
				header("Refresh: 5; URL=login.php" );
				}
include('includes/header.php');
?>

<!-- Begin page content -->
<div class="container">
        <div class="error"><?php if(isset($success)) { echo $success; } ?></div>

<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom :</label>
    <input type="text" name="nom" class="form-control" placeholder="Nom" required>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Prenom :</label>
    <input type="text" name="prenom" class="form-control" placeholder="Prenom" required>
  </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Adresse email :</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" name="submit" class="btn btn-default">S'inscrire</button>
</form>

</div>

<?php
include('includes/footer.php');
?>