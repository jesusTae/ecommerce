<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>ECOMMERCE</title>

  <!-- Favicons -->
  <link href="<?php echo base_url('asset/administrativo/img/favicon.png')?>" rel="icon">
  
  <link href="<?php echo base_url('asset/administrativo/img/apple-touch-icon.png')?>" rel="apple-touch-icon">
  
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('asset/administrativo/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  
  <!--external css-->
  <link href="<?php echo base_url('asset/administrativo/lib/font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
  
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('asset/administrativo/css/style.css')?>" rel="stylesheet">
  
  <link href="<?php echo base_url('asset/administrativo/css/style-responsive.css')?>" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body style="background-color: #F9FAFA;">
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <div id="login-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="<?php echo base_url('asset/administrativo/img/global.png')?>" class="img-fluid" width="200">
                </div>
            </div>
            <form class="form-login" action="<?php echo site_url('Login/auth');?>" method="post">
                <h2 class="form-login-heading">Entrar</h2>
                    <div class="login-wrap">
                        <input type="text" class="form-control" name="email" placeholder="Correo electronico" autofocus>
                        <br>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        <br>
                        <button class="btn btn-success btn-block" type="submit"><i class="fa fa-lock"></i> Entrar</button>
                        <hr>
                        <div class="login-social-link centered">
                            <p>Registrarse</p>
                            <a class="btn btn-success" href="<?php echo site_url('ControladorRegistrar');?>"><i class="fa fa-address-book"></i> Registrarse</a>
                                <hr>
                            <?php echo $this->session->flashdata('msg');?>
                        </div>
                    </div>
            </form>
        </div>
    </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('asset/administrativo/lib/jquery/jquery.min.js')?>"></script>
  
  <script src="<?php echo base_url('asset/administrativo/lib/bootstrap/js/bootstrap.min.js')?>"></script>
  
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo base_url('asset/administrativo/lib/jquery.backstretch.min.js')?>"></script>
  
</body>
</html>
