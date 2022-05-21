<?php
require 'database.php';

$titulo = 'Registrate';
$message = '';
$colorAlert = '';

if (
  !empty($_POST['nombre']) && !empty($_POST['apellido'])
  && !empty($_POST['edad']) && !empty($_POST['email'])
  && !empty($_POST['password'] && !empty($_POST['nivel']))  
) {
  $sql = "INSERT INTO usuarios (nombre,apellido,edad,email, password, nivel) VALUES (:nombre,:apellido,:edad,:email, :password, :nivel)";
  $stmt = $conexion->prepare($sql);
  $stmt->bindParam(':nombre', $_POST['nombre']);
  $stmt->bindParam(':apellido', $_POST['apellido']);
  $stmt->bindParam(':edad', $_POST['edad']);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':nivel', $_POST['nivel']);

  // if ($_POST["password"] === $_POST["confirm_password"]) {
  //   $colorAlert = 'alert-success';
  //   $message = '<strong>Successfully</strong> created new user';
  // } else {
  //   $colorAlert = 'alert-warning';
  //   $message = '<strong>Error: </strong>Confirma de contraseña no concidien';
  // }
  if ($stmt->execute()) {
    $colorAlert = 'alert-success';
    $message = '<strong>Successfully</strong> created new user';
  } else {
    $colorAlert = 'alert-warning';
    $message = '<strong>Error: </strong>Sorry there must have been an issue creating your account';
  }
}
?>
  

<?php require 'partials/header.php' ?> 
<?php require 'partials/navbar.php' ?>


<div class="container d-flex justify-content-center text-center m-5">
  <div class="col-md-2 col-sm-1"></div>
  <div class="col-md-8 col-sm-10">
    <?php require 'partials/message.php' ?>
    <h1>Registrarse</h1>
    <div class="mb-3">
      <span> ó <a href="login.php">Login</a></span>
    </div>

    <div class="card mb-4 shadow p-3 mb-5 bg-white rounded">
      <div class="card-body">
        <form action="signup.php" method="POST">

          <div class="mb-3">
            <input name="nombre" type="text" class="form-control" placeholder="Digite su nombres" required>
          </div>

          <div class="mb-3">
            <input name="apellido" type="text" class="form-control" placeholder="Digite su apellidos" required>
          </div>

          <div class="mb-3">
            <input name="edad" type="text" class="form-control" placeholder="Digiete su edad" required>
          </div>

          <div class="mb-3">
            <input name="email" type="text" class="form-control" placeholder="Digite su E-mail" required>
          </div>

          <div class="mb-3">
            <input name="password" type="password" class="form-control" placeholder="Digite su contraseña" required>
          </div>

          <div class="mb-3">
            <input name="confirm_password" type="password" class="form-control" placeholder="Digite volver su contraseña" required>
          </div>

          <div class="mb-3">
          <div class="input-group">
              <input class="form-check-input mt-0" name="nivel" type="radio" value="1">
            Desde un nivel 1
          </div>
        </div>
         

          <div class="mb-3">
            <input type="submit" class="btn btn-primary btn-block w-100" value="Registro">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-1"></div>

</div>

<?php require 'partials/footer.php' ?>