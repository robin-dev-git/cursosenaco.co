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
    $p5 = $_POST["p5"];
    $c = 0;
    $i = 0;

    if ($p1 == "c") {
        $colorAlert2 = 'alert-success';
        $salida = '<strong>1. Correcto:</strong> la respuesta es Papá';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>1. Incorrecto: </strong>la respuesta es Papá';
        $i += 1;
    }

    if ($p2 == "a") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>2. Correcto:</strong> la respuesta es Mamá';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>2. Incorrecto: </strong>la respuesta es Mamá';
        $i += 1;
    }

    if ($p3 == "a") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>3. Correcto:</strong> la respuesta es Tío (a)';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>3. Incorrecto: </strong>la respuesta es Tío (a)';
        $i += 1;
    }

    if ($p4 == "d") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>4. Correcto:</strong> la respuesta es Abuelo (a)';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>4. Incorrecto: </strong>la respuesta es Abuelo (a)';
        $i += 1;
    }

    if ($p5 == "b") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>5. Correcto:</strong> la respuesta es Hermano (a)';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>5. Incorrecto: </strong>la respuesta es Hermano (a)';
        $i += 1;
    }


    if ($c >= 4) {
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
    <form action="quiz3.php" method="POST">

        <div class="form-check">
            <div class="text-center mb-3">
                <img src="assets\img\quiz\familia_1.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>1. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="a">
                    <label class="form-check-label ms-2" for="p1">
                        Mamá
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="b">
                    <label class="form-check-label ms-2" for="p1">
                        Abuelo (a)
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="c">
                    <label class="form-check-label ms-2" for="p1">
                        Papá
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="d">
                    <label class="form-check-label ms-2" for="p1">
                        Hijo
                    </label>
                </li>
            </ol>


            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\familia_2.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>2. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="a">
                    <label class="form-check-label ms-2" for="p2">
                        Mamá
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="b">
                    <label class="form-check-label ms-2" for="p2">
                        Abuelo (a)
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="c">
                    <label class="form-check-label ms-2" for="p2">
                        hermano (a)
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="d">
                    <label class="form-check-label ms-2" for="p2">
                        Tío (a)
                    </label>
                </li>
            </ol>


            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\familia_3.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>3. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="a">
                    <label class="form-check-label ms-2" for="p3">
                        Tío (a)
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="b">
                    <label class="form-check-label ms-2" for="p3">
                        Papá
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="c">
                    <label class="form-check-label ms-2" for="p3">
                        Hermano (a)
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="d">
                    <label class="form-check-label ms-2" for="p3">
                        Primo (a)
                    </label>
                </li>
            </ol>

            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\familia_4.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>4. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="a">
                    <label class="form-check-label ms-2" for="p4">
                        Primo (a)
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="b">
                    <label class="form-check-label ms-2" for="p4">
                        Novio (a)
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="c">
                    <label class="form-check-label ms-2" for="p4">
                        Esposo (a)
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="d">
                    <label class="form-check-label ms-2" for="p4">
                        Abuelo (a)
                    </label>
                </li>
            </ol>

            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\familia_5.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>5. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p5" value="a">
                    <label class="form-check-label ms-2" for="p5">
                        Papá
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p5" value="b">
                    <label class="form-check-label ms-2" for="p5">
                        Hermano (a)
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p5" value="c">
                    <label class="form-check-label ms-2" for="p5">
                        Novio (a)
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p5" value="d">
                    <label class="form-check-label ms-2" for="p5">
                        Primo (a)
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