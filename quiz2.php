<?php

session_start();

$titulo = 'Evaluación del Aprendizaje';

require 'database.php';
require 'user.php';

$message = '';
$salida = '';


if ($_POST) {
    $p1 = $_POST["p1"];
    $p2 = $_POST["p2"];
    $p3 = $_POST["p3"];
    $p4 = $_POST["p4"];
    $c = 0;
    $i = 0;

    if ($p1 == "b") {
        $colorAlert2 = 'alert-success';
        $salida = '<strong>1. Correcto:</strong> la respuesta es Buenas noches';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>1. Incorrecto: </strong>la respuesta es Buenas noches';
        $i += 1;
    }

    if ($p2 == "c") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>2. Correcto:</strong> la respuesta es Hola';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>2. Incorrecto: </strong>la respuesta es Hola';
        $i += 1;
    }

    if ($p3 == "a") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>3. Correcto:</strong> la respuesta es Buenas tardes';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>3. Incorrecto: </strong>la respuesta es Buenas tardes';
        $i += 1;
    }

    if ($p4 == "d") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>4. Correcto:</strong> la respuesta es Buenos días';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>4. Incorrecto: </strong>la respuesta es Buenos días';
        $i += 1;
    }




    if ($c >= 3) {
        $colorAlert = 'alert-success';
        $message = '<strong>Felicitaciones,</strong> preguntas correctas ' . $c;
    } else {
        $colorAlert = 'alert-danger';
        $message = '<strong>Falllaste,</strong> preguntas incorrectas ' . $i;
    }
}

?>

<?php require 'partials/header.php' ?>
<?php require 'partials/navbar.php' ?>


<div class="container">
    <h1 class="text-center mt-3 mb-4">Evaluación del Aprendizaje</h1>
    <?php require 'partials/message.php' ?>
    <?php require 'partials/salida.php' ?>
    <form action="quiz2.php" method="POST">

        <div class="form-check">
            <div class="text-center mb-3">
                <img src="assets\img\quiz\saludo_4.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>1. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="a">
                    <label class="form-check-label ms-2" for="p1">
                        Buenos días
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="b">
                    <label class="form-check-label ms-2" for="p1">
                        Buenas noches
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="c">
                    <label class="form-check-label ms-2" for="p1">
                        Adíos
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="d">
                    <label class="form-check-label ms-2" for="p1">
                        Gracias
                    </label>
                </li>
            </ol>


            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\saludo_1.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>2. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="a">
                    <label class="form-check-label ms-2" for="p2">
                        Buenas tardes
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="b">
                    <label class="form-check-label ms-2" for="p2">
                        Con gusto
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="c">
                    <label class="form-check-label ms-2" for="p2">
                        Hola
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="d">
                    <label class="form-check-label ms-2" for="p2">
                        Bienvenido
                    </label>
                </li>
            </ol>


            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\saludo_3.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>3. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="a">
                    <label class="form-check-label ms-2" for="p3">
                        Buenas tardes
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="b">
                    <label class="form-check-label ms-2" for="p3">
                        Buenas noches
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="c">
                    <label class="form-check-label ms-2" for="p3">
                        Gracias
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="d">
                    <label class="form-check-label ms-2" for="p3">
                        Cómo estás
                    </label>
                </li>
            </ol>

            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\saludo_2.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>4. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="a">
                    <label class="form-check-label ms-2" for="p4">
                        Gracias
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="b">
                    <label class="form-check-label ms-2" for="p4">
                        Con gusto
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="c">
                    <label class="form-check-label ms-2" for="p4">
                        Buenas noches
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="d">
                    <label class="form-check-label ms-2" for="p4">
                        Buenos días
                    </label>
                </li>
            </ol>
        </div>
        <div class="mb-5 pt-3">
            <input type="submit" value="Verificar" class="btn btn-primary">
        </div>
    </form>
    <hr />

</div>

<?php require 'partials/footer.php' ?>