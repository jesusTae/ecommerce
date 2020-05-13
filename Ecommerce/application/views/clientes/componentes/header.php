<!DOCTYPE html>
<html>
<head>
    <title>GSCommerce</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="Globalsoft, Global, e-commerce, touch">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('asset/clientes/css/bootstrap.min.css') ?>" />    
    <link rel="stylesheet" href="<?php echo base_url('asset/clientes/css/owl.carousel.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('asset/clientes/css/animate.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('asset/clientes/css/site.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('asset/clientes/css/style.css') ?>" />
    <link href="<?php echo base_url('asset/clientes/css/alertify.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/clientes/css/themes/semantic.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('asset/clientes/js/jquery-3.2.1.min.js') ?>"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <style>
        .primary-color {
            transition: all 1s ease;
        }
    </style>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="overflow-x: hidden;">
    <nav class="navbar navbar-expand-lg navbar-ligth primary-color menu" style="position: fixed;z-index: 1000;width: 100%;background-color:rgb(255, 255, 255) !important;">

        <a class="navbar-brand" href="<?php echo site_url('/'); ?>">Globalsoft</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="btn-group">
            <button type="button" class="btn btn-link" style="color:black">Categorias</button>
            <button type="button" class="btn btn-link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" >Zapatos Deportivos</a>
                <a class="dropdown-item" >Zapatos Formales</a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="basicExampleNav">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    
                    <a class="card-bag" href="" id="user"><img style="cursor: -webkit-grab; cursor: grab;" src="<?php echo base_url('asset/clientes/img/icons/login.png')?>" alt="">Mi Cuenta<a id="user_log" style="color:white;cursor:pointer"></a></a>&nbsp;&nbsp;&nbsp;
                </li>
                        
                <li class="nav-item">
                    <a class="card-bag" href="<?php echo site_url('Login/logout');?>"><img style="cursor: -webkit-grab; cursor: grab;" src="<?php echo base_url('asset/clientes/img/icons/bag.png')?>" alt="">cerrar sesion<span id="Cart_Count" class="span_bag">0</span></a>
                </li>
            </ul>
        </div>
    </nav>