<?php

session_start();

$titulo = 'Aprendizaje - LSC';

require 'database.php';
require 'user.php';


?>

<?php require 'partials/header.php' ?>
<?php require 'partials/navbar.php' ?>
<div class="container">
    <h1 class="text-center m-3">Curso de Lengua de Señas</h1>
    <div class="card d-flex justify-content-center w-75 shadow p-3 mb-5 bg-white rounded">

        <div class="ratio ratio-16x9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UJPmF8UtMz0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="card-body">
            <h5 class="card-title"><strong>Lección 1:</strong> Abecedario</h5>
            <?php if (!empty($user)) : ?>
                <li class="nav-item d-flex justify-content-end me-3">
                    <a type="button" class="btn btn-primary" href="quiz1.php">Ir a examen</a>
                </li>
            <?php else : ?>
                <li class="nav-item d-flex justify-content-end me-3">
                    <a type="button" class="btn btn-primary" href="login.php">Ir a examen</a>
                </li>
            <?php endif; ?>

        </div>
    </div>

    <?php
    if (!empty($_SESSION['nivel']) && $_SESSION['nivel'] == '2') { ?>
        <div class="card d-flex justify-content-center w-75 shadow p-3 mb-5 bg-white rounded">

            <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xzc3pfQmK3Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="card-body">
                <h5 class="card-title"><strong>Lección 2:</strong> Saludos</h5>
                <li class="nav-item d-flex justify-content-end me-3">
                    <a type="button" class="btn btn-primary" href="quiz2.php">Ir a examen</a>
                </li>
            </div>
        </div>
    <?php } else if (!empty($_SESSION['nivel']) && $_SESSION['nivel'] == '3') { ?>
        <div class="card d-flex justify-content-center w-75 shadow p-3 mb-5 bg-white rounded">

            <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xzc3pfQmK3Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="card-body">
                <h5 class="card-title"><strong>Lección 2:</strong> Saludos</h5>
                <li class="nav-item d-flex justify-content-end me-3">
                    <a type="button" class="btn btn-primary" href="quiz2.php">Ir a examen</a>
                </li>
            </div>
        </div>
    <?php } else { ?>
        <div class="card d-flex justify-content-center w-75 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-lock me-4"></i><strong>Lección 2:</strong> Saludos</h5>
            </div>
        </div>
    <?php }  ?>




    <?php if (!empty($_SESSION['nivel']) && $_SESSION['nivel'] == '3') { ?>
        <div class="card d-flex justify-content-center w-75 shadow p-3 mb-5 bg-white rounded">
            <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/JmA1I8sIQIw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card-body">
                <h5 class="card-title"><strong>Lección 3:</strong> Integrantes de la Familia</h5>
                <li class="nav-item d-flex justify-content-end me-3">
                    <a type="button" class="btn btn-primary" href="quiz3.php">Ir a examen</a>
                </li>
            </div>
        </div>
    <?php } else { ?>
        <div class="card d-flex justify-content-center w-75 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-lock me-4"></i><strong>Lección 3:</strong> Integrantes de la Familia</h5>
            </div>
        </div>
    <?php } ?>


</div>




<?php require 'partials/footer.php' ?>