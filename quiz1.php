<?php

session_start();

$titulo = 'Evaluación del Aprendizaje';

require 'database.php';
require 'user.php';

$message = '';
$salida = '';


// if (!empty($_POS['nivel'])) {
if ($_POST) {
    $p1 = $_POST["p1"];
    $p2 = $_POST["p2"];
    $p3 = $_POST["p3"];
    $p4 = $_POST["p4"];
    $p5 = $_POST["p5"];
    $p6 = $_POST["p6"];
    $p7 = $_POST["p7"];
    $p8 = $_POST["p8"];
    $p9 = $_POST["p9"];
    $p10 = $_POST["p10"];

    $c = 0;
    $i = 0;

    if ($p1 == "c") {
        $colorAlert2 = 'alert-success';
        $salida = '<strong>1. Correcto:</strong> la respuesta es L';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>1. Incorrecto: </strong>la respuesta es L';
        $i += 1;
    }

    if ($p2 == "b") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>2. Correcto:</strong> la respuesta es A';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>2. Incorrecto: </strong>la respuesta es A';
        $i += 1;
    }

    if ($p3 == "a") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>3. Correcto:</strong> la respuesta es S';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>3. Incorrecto: </strong>la respuesta es S';
        $i += 1;
    }

    if ($p4 == "b") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>4. Correcto:</strong> la respuesta es G';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>4. Incorrecto: </strong>la respuesta es G';
        $i += 1;
    }

    if ($p5 == "d") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>5. Correcto:</strong> la respuesta es I';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>5. Incorrecto: </strong>la respuesta es I';
        $i += 1;
    }

    if ($p6 == "c") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>5. Correcto:</strong> la respuesta es K';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>5. Incorrecto: </strong>la respuesta es K';
        $i += 1;
    }

    if ($p7 == "b") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>5. Correcto:</strong> la respuesta es Y';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>5. Incorrecto: </strong>la respuesta es Y';
        $i += 1;
    }

    if ($p8 == "d") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>5. Correcto:</strong> la respuesta es E';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>5. Incorrecto: </strong>la respuesta es E';
        $i += 1;
    }

    if ($p9 == "a") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>5. Correcto:</strong> la respuesta es N';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>5. Incorrecto: </strong>la respuesta es N';
        $i += 1;
    }

    if ($p10 == "c") {
        $colorAlert2 = 'alert-success';
        $salida = $salida . '<br /><strong>5. Correcto:</strong> la respuesta es V';
        $c += 1;
    } else {
        $colorAlert2 = 'alert-danger';
        $salida = $salida . '<br /><strong>5. Incorrecto: </strong>la respuesta es V';
        $i += 1;
    }


    if ($c >= 7) {
        $colorAlert = 'alert-success';
        $message = '<strong>Felicitaciones,</strong> preguntas correctas ' . $c;

        session_start();
        $_SESSION['nivel']=$_SESSION['nivel']+1;

            $sql = "UPDATE usuarios SET  nivel = (select nivel from usuarios WHERE id = :id )+1  WHERE id = :id";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':id', $_SESSION['user_id']);
            $stmt->execute();


      /*  $sql = "select nivel from usuarios WHERE id = :id ";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nivel', $_POST['nivel']);
       
        

        if(!empty($_POST['nivel'])){
            

                    
            $sql = "UPDATE usuarios SET  nivel = (select nivel from usuarios WHERE id = :id )+1  WHERE id = :id";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':id', $_SESSION['user_id']);

        } */
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
    <form action="quiz1.php" method="POST">

        <div class="form-check">
            <div class="text-center mb-3">
                <img src="assets\img\quiz\az_12.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>1. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="a" required>
                    <label class="form-check-label ms-2" for="p1">
                        A
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="b" required>
                    <label class="form-check-label ms-2" for="p1">
                        K
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="c" required>
                    <label class="form-check-label ms-2" for="p1">
                        L
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p1" value="d" required>
                    <label class="form-check-label ms-2" for="p1">
                        C
                    </label>
                </li>
            </ol>


            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\az_1.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>2. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="a" required>
                    <label class="form-check-label ms-2" for="p2">
                        B
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="b" required>
                    <label class="form-check-label ms-2" for="p2">
                        A
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="c" required>
                    <label class="form-check-label ms-2" for="p2">
                        D
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p2" value="d" required>
                    <label class="form-check-label ms-2" for="p2">
                        C
                    </label>
                </li>
            </ol>


            <hr />

            <div class="text-center mb-3">
                <h2>S</h2>
            </div>
            <p>3. Selecciona la palabra correcta que representa la letra: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="a" required>
                    <label class="form-check-label ms-2" for="p3">
                        <img src="assets\img\quiz\az_20.jpg" class="rounded" height="120px" alt="...">

                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="b" required>
                    <label class="form-check-label ms-2" for="p3">
                        <img src="assets\img\quiz\az_27.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="c" required>
                    <label class="form-check-label ms-2" for="p3">
                        <img src="assets\img\quiz\az_3.jpg" class="rounded" height="120px" alt="...">

                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p3" value="d" required>
                    <label class="form-check-label ms-2" for="p3">
                        <img src="assets\img\quiz\az_17.jpg" class="rounded" height="120px" alt="...">

                    </label>
                </li>
            </ol>

            <hr />

            <div class="text-center mb-3">
                <h2>G</h2>
            </div>
            <p>4. Selecciona la palabra correcta que representa la letra: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="a" >
                    <label class="form-check-label ms-2" for="p4">
                        <img src="assets\img\quiz\az_14.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="b" required>
                    <label class="form-check-label ms-2" for="p4">
                        <img src="assets\img\quiz\az_7.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="c" required>
                    <label class="form-check-label ms-2" for="p4">
                        <img src="assets\img\quiz\az_9.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p4" value="d" required>
                    <label class="form-check-label ms-2" for="p4">
                        <img src="assets\img\quiz\az_27.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
            </ol>

            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\az_9.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>5. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p5" value="a" required>
                    <label class="form-check-label ms-2" for="p5">
                        J
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p5" value="b" required>
                    <label class="form-check-label ms-2" for="p5">
                        B
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p5" value="c" required>
                    <label class="form-check-label ms-2" for="p5">
                        L
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p5" value="d" required>
                    <label class="form-check-label ms-2" for="p5">
                        I
                    </label>
                </li>
            </ol>

            <hr />

            <div class="text-center mb-3">
                <h2>K</h2>
            </div>
            <p>6. Selecciona la palabra correcta que representa la letra: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p6" value="a" required>
                    <label class="form-check-label ms-2" for="p6">
                        <img src="assets\img\quiz\az_3.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p6" value="b" required>
                    <label class="form-check-label ms-2" for="p6">
                        <img src="assets\img\quiz\az_17.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p6" value="c" required>
                    <label class="form-check-label ms-2" for="p6">
                        <img src="assets\img\quiz\az_11.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p6" value="d" required>
                    <label class="form-check-label ms-2" for="p6">
                        <img src="assets\img\quiz\az_18.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
            </ol>

            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\az_26.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>7. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p7" value="a" required>
                    <label class="form-check-label ms-2" for="p7">
                        I
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p7" value="b" required>
                    <label class="form-check-label ms-2" for="p7">
                        Y
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p7" value="c" required>
                    <label class="form-check-label ms-2" for="p7">
                        G
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p7" value="d" required>
                    <label class="form-check-label ms-2" for="p7">
                        H
                    </label>
                </li>
            </ol>

            <hr />

            <div class="text-center mb-3">
                <h2>E</h2>
            </div>
            <p>8. Selecciona la palabra correcta que representa la letra: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p8" value="a" required>
                    <label class="form-check-label ms-2" for="p8">
                        <img src="assets\img\quiz\az_13.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p8" value="b" required>
                    <label class="form-check-label ms-2" for="p8">
                        <img src="assets\img\quiz\az_25.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p8" value="c" required>
                    <label class="form-check-label ms-2" for="p8">
                        <img src="assets\img\quiz\az_3.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p8" value="d" required>
                    <label class="form-check-label ms-2" for="p8">
                        <img src="assets\img\quiz\az_5.jpg" class="rounded" height="120px" alt="...">
                    </label>
                </li>
            </ol>

            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\az_14.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>9. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p9" value="a" required>
                    <label class="form-check-label ms-2" for="p9">
                        N
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p9" value="b" required>
                    <label class="form-check-label ms-2" for="p9">
                        M
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p9" value="c" required>
                    <label class="form-check-label ms-2" for="p9">
                        Ñ
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p9" value="d" required>
                    <label class="form-check-label ms-2" for="p9">
                        W
                    </label>
                </li>
            </ol>

            <hr />

            <div class="text-center mb-3">
                <img src="assets\img\quiz\az_23.jpg" class="rounded" height="200px" alt="...">
            </div>
            <p>10. Selecciona la palabra correcta que representa la imagen: </p>
            <ol type="a">
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p10" value="a" required>
                    <label class="form-check-label ms-2" for="p10">
                        W
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p10" value="b" required>
                    <label class="form-check-label ms-2" for="p10">
                        U
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p10" value="c" required>
                    <label class="form-check-label ms-2" for="p10">
                        V
                    </label>
                </li>
                <li>
                    <input class="form-check-input ms-2" type="radio" name="p10" value="d" required>
                    <label class="form-check-label ms-2" for="p10">
                        Y
                    </label>
                </li>
            </ol>
        </div>
        <div class="mb-5 pt-3">
            <button type="submit" class="btn btn-primary" name="nivel" value="2">Verfificar</button>
            <!-- <input type="submit" value="Verificar" class="btn btn-primary"> -->
        </div>
    </form>
    <hr />

</div>

<?php require 'partials/footer.php' ?>