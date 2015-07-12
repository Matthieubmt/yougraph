<?php
include('libs/loader.php');


if(!$Auth->islog()) {
    } else {
      header('Location: index.php');
    }

    
if(isset($_POST['submit'])) {
  $pass = $_POST['password'];
  $email = $_POST['email'];
  $password =  sha1($pass);

  $req = $MyPDO->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
  $info = $req->fetch();
  if($info){
       $_SESSION['Auth'] = array(
          'id' => $info['id'],
          'email' => $info['email'],
          'password' => $info['password']);
        header('Location: account.php');

  }else{
     $error_actif = '<div class="notification error closeable">
                <p><span>Erreur!</span> Votre nom d\'utilisateur ou mot de passe est erroné</p>
                <a class="close"></a>
              </div>';
  }
    }

include('includes/header.php');
?>

<!-- Begin page content -->
<div class="container">

<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse email</label>
    <input type="email" name="email" class="form-control" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>


  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>

</div>

<?php
include('includes/footer.php');
?>