<?php

session_start();
if (isset($_SESSION['user_id'])) {
  header('Location: /cursosenaco.co');
}
require 'database.php';
$titulo = 'Login';

$colorAlert = '';
if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conexion->prepare('SELECT id, email, password FROM usuarios WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header("Location: /cursosenaco.co");
  } else {
    $colorAlert = 'alert-warning';
    $message = 'Sorry, those credentials do not match';
  }
}

?>

<?php require 'partials/header.php' ?>
<?php require 'partials/navbar.php' ?>


<div class="container d-flex justify-content-center text-center m-5">
<div class="col-md-2"></div>
  <div class="col-md-8">
    <?php require 'partials/message.php' ?>
    <h1>Iniciar Sesión</h1> 
    <div class="mb-3">
      <span> ó <a href="signup.php">Registrate</a></span>
    </div>

    <div class="card mb-4 shadow p-3 mb-5 bg-white rounded justify-content-center text-center">
      <div class="card-body">
        <form action="login.php" method="POST">
          <div class="mb-3">
            <input name="email" type="text" class="form-control" placeholder="Digite correo de electronico">
          </div>
          <div class="mb-3">
            <input name="password" type="password" class="form-control" placeholder="Digite contraseña">
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-primary btn-block w-100" value="Iniciar Sesión">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>

</div>

<?php require 'partials/footer.php' ?>