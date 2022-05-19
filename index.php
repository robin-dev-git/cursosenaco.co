<?php
session_start();

$titulo = 'Inicio - SeñaCO';

require 'database.php';
require 'user.php';


?>
<?php require 'partials/header.php' ?>
<?php require 'partials/navbar.php' ?>
<section id="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php if (!empty($user)) : ?>
          <p class="promo-title">Bienvenido <?= $user['email']; ?></p>
          <a href="/cursosenaco.co/learn.php" class="btn btn-primary mt-2"><img src="assets/img/play.png" class="play-btn">Empieza a aprender LSC</a>
        <?php else : ?>
          <a href="/cursosenaco.co/login.php" class="btn btn-primary mt-5"><img src="assets/img/play.png" class="play-btn">Empieza a aprender LSC</a>


        <?php endif; ?>
      </div>
      <div class="col-md-6 text-center">
        <img src="assets/img/home2.png" class="img-fluid">
      </div>
    </div>
  </div>
  <img src="assets/img/wave1.png" class="bottom-img">
</section>


<!----------------- empecemos aprende  ------------------->
<section id="empezar">
  <div class="container">
    <h1 class="title text-center p-2">EMPECEMOS APRENDIENDO…</h1>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <p class="text-center">
          Para manejar un correcto lenguaje inclusivo, te contamos algunos términos o conceptos que te ayudaran a aprender y a diferenciar cada tipo de personas según sus características, a continuación, algunos puntos.
        </p>
        <ul class="ms-2">
          <li>No todas las personas sordas son mudas: Las personas sordas pueden emitir sonidos e incluso pronunciar algunas palabras o tener un lenguaje, lo que sucede es que no es tan claro o las palabras no cuentan con la vibración adecuada.</li>
          <li>Existes personas sordas que no emiten ningún tipo de sonido debido a daños en las cuerdas vocales, se le llaman sordomudos. </li>
          <li>Debido a que no escuchan ningún sonido, el cerebro no está en la capacidad de reproducirlos, por lo tanto, las personas sordas de nacimiento generalmente no desarrollan un entendible lenguaje oralizado.</li>
          <li>La persona sorda puede comunicarse a través de signos y expresiones conocido como Lengua de Señas</li>
          <li>Las personas que tenían un lenguaje fluido y claro y por alguna lesión perdieron la audición pueden seguir su lenguaje verbal de manera corriente y desarrollar habilidades para comunicarse o implementar la comunicación por Lengua de Señas</li>
        </ul>
        <p>
          La sordera se puede presentar en los individuos ya sea por lesiones traumáticas que afecten los órganos relacionados (cerebro-oído) o por causas congénitas, es decir desde el desarrollo fetal y nacimiento, posiblemente por alteraciones genéticas.
        </p>
      </div>
      <div class="col-md-2"></div>

    </div>
  </div>
</section>

<!----------------- Tipos de personas  ------------------->
<section id="tipopersona">
  <div class="container text-center">
    <h1 class="title">CARACTERÍSTICAS</h1>
    <div class="row text-center">
      <div class="col-md-4 tipopersona">
        <img src="assets/img/sordo.png " class="tipopersona-img">
        <h4>Sorda</h4>
        <p>
          La persona sorda es aquella que presenta dificultades auditivas. Es posible que escuche poco o ningún sonido. Las personas sordas tienen las mismas capacidades que los oyentes. Algunas personas sordas se comunican en lengua de señas y otras en una lengua oral, que es el castellano o el español en Colombia. (INSOR)
        </p>
      </div>
      <div class="col-md-4 tipopersona">
        <img src="assets/img/auditivo.png " class="tipopersona-img">
        <h4>Auditivo o hipoacusia</h4>
        <p>
          Es un déficit para escuchar los sonidos, lo que hace que sea difícil desarrollar palabras, lenguaje y comunicaciones. Se puede presentar unilateral ósea que afecta a un oído o binario que se presenta en los dos oídos. También incluye la desconexión entre el oído interno y el cerebro, lo que impide el envío de información y por ende no es perceptible ningún tipo de sonido.
        </p>
      </div>
      <div class="col-md-4 tipopersona">
        <img src="assets/img/mudo.png " class="tipopersona-img">
        <h4>Mudo</h4>
        <p>
          Una persona muda es aquella que no emite ningún tipo de sonido, generalmente se presenta cuando existen daños en las cuerdas vocales que impiden las vibraciones que generan el sonido o también por una desconexión cerebral en las áreas relacionadas al lenguaje.
        </p>
      </div>
    </div>
  </div>
</section>

<!------------------ servicios ------------------------->
<section id="servicios">
  <div class="container">
    <h1 class="title text-center mb-4">Servicios</h1>
    <div class="row">
      <div class="col-md-6 servicios pt-3">
        <p class="h2">"TODOS NUESTROS SUEÑOS SE PUEDEN VOLVER REALIDAD SI TENEMOS EL CORAJE DE PERSEGUIRLOS."</p>
        <p class="h1 text-end">-WALT DISNEY</p>

      </div>
      <div class="col-md-6">
        <img src="assets/img/servicios.gif" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<!---------------------- nuestro equipo ---------------------->
<section id="equipo">
  <div class="container text-white">
    <h1 class="title text-center pt-3">NUESTRO EQUIPO</h1>
    <p class="pt-2 pb-4">Somos un equipo comprometido con la innovación, la inclusión y el aprendizaje, conformado por Valeria Bernal y Robinson Espejo<b>;</b> estudiantes de Diseño y Desarrollo web, pensamos en una nueva herramienta de aprendizaje inclusivo apostando y creyendo en nuestras capacidades para brindarles a ustedes la oportunidad de expandirse a nuevas comunidades y formas de relacionarse.</p>
    <div class="row offset-1">
      <div class="col-md-5 equipo">
        <img src="assets/img/user1.jpg" alt="">
        <p class="user-details"><b>Valeria Bernal</b><br> Gestión informatico</p>
        <p class="pt-2">Estudiante de gestión informática en la institución universitaria Tecnológico de Antioquia. Tengo una técnica de auxiliar administrativo, donde tuve a la oportunidad de acercarme a los conocimientos sobre economía solidaria y diferentes sectores del campo administrativo. Me caracterizo por ser una joven diligente, disponible, activa y creativa en el medio donde me desempeño.</p>
        <div class="social-icons2">
          <a href="https://www.facebook.com/" style="text-decoration: none; color: white; font-size: 30px; margin-left: 12px;">
            <i class="fa-brands fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com/" style="text-decoration: none; color: white; font-size: 30px; margin-left: 12px;">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>
      </div>
      <div class="col-md-5 equipo">
        <img src="assets/img/user2.jpg" alt="">
        <p class="user-details"><b>Robinson Espejo</b><br>Desarrollador Full-Stack</p>
        <p class="pt-2">Diseñador gráfico, estudiante de Diseño y Desarrollo web, persona sorda no oralizada, comprometido con mi crecimiento personal y en busca de adquirir conocimiento por medio de los cuales pueda generar y aportar a los cambios sociales.</p>
        <div class="social-icons2">
          <a href="https://www.facebook.com/robinson.espejo.14" style="text-decoration: none; color: white; font-size: 30px; margin-left: 12px;">
            <i class="fa-brands fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com/robinux0101/" style="text-decoration: none; color: white; font-size: 30px; margin-left: 12px;">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!------------------------- Social media section ------------------------- -->
<section id="social-media">
  <div class="container text-center">
    <p>NUESTRAS REDES SOCIALES</p>
    <div class="social-icons">
      <a href="https://www.facebook.com/"><img src="assets/img/facebook-icon.png"></a>
      <a href="https://www.instagram.com/"><img src="assets/img/instagram-icon.png"></a>
    </div>
  </div>
</section>


<?php require 'partials/footer.php' ?>