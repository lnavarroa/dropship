<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DropShip Chile</title>
    <meta name="description" content="DropShip Chile &amp; un punto de encuentro entre bodegueros mayoristas y vendedores chilenos.">
    <meta name="keywords" content="dropshipping chile, dropshipping, customers, retailers, dropshiper, mayoristas">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200, 300, 400,600,700, 900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
    <link href="<?php base_url() ?>assets/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php base_url() ?>assets/bootstrap/dist/css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">DropShip Chile</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Que es dropshipping</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Bienvenido a DropShip Chile</h1>
      <p class="lead">Portal de negocios para emprendedores</p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Qué es el dropshipping?</h2>
          <p class="lead">Es una modalidad de negocio variante del e-commerce, en donde se deja de lado la 
          logística tradicional, ya que aquí entran en juego 3 actores principales:</p>
          <ul>
            <li><b>Cliente</b> es quién necesita y compra un producto en un e-commerce. </li>
            <li><b>E-commerce</b> gestiona la atención y facturación del cliente, además genera la orden para el dropshipper.</li>
            <li><b>Dropshipper</b> puede ser un mayorista, importador o fabrica, el cual recibe la orden de compra del e-commerce
            y realiza el despacho del producto directamente hacia el cliente, pero bajo el nombre o marca del e-commerce.</li>
            <li><a  href="<?php base_url() ?>dropshipping">Leer más</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Services we offer</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact us</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Derechos reservados &copy; DropShip 2019</p>
    </div>
    <!-- /.container -->
  </footer>

<div id="container">

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>



  <!-- Bootstrap core JavaScript -->
  <script src="<?php base_url() ?>assets/bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="<?php base_url() ?>assets/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php base_url() ?>assets/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?php base_url() ?>assets/bootstrap/js/dist/scrolling-nav.js"></script>

</body>
</html>


