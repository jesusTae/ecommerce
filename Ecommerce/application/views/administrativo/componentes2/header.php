<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Ecommerce Admin</title>

  <!-- Favicons -->
  <link href="<?php echo base_url('asset/administrativo/img/favicon.png')?>" rel="icon">
  <link href="<?php echo base_url('asset/administrativo/img/apple-touch-icon.png')?>" rel="apple-touch-icon">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('asset/administrativo/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url('asset/administrativo/lib/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('asset/administrativo/css/style.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('asset/administrativo/css/style-responsive.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('asset/administrativo/css/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('asset/administrativo/css/select2.min.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/administrativo/css/alertify.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('asset/administrativo/css/themes/semantic.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('asset/administrativo/lib/bootstrap-fileupload/bootstrap-fileupload.css');?>" rel="stylesheet">

  <script src="<?php echo base_url('asset/administrativo/lib/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('asset/administrativo/js/select2.min.js');?>"></script>

</head>
<style>
  .table tfoot input{
        width: 100% !important;
    }
    .table tfoot {
        display: table-header-group !important;
    }
    .scroll_text{
        height:480px;
        overflow:auto;
        padding:0px 15px;
    }

    .scroll_text::-webkit-scrollbar {  
        width: 8px;  
    }  

    .scroll_text::-webkit-scrollbar-track {  
        background-color: #ffffff
    }  
    .scroll_text::-webkit-scrollbar-thumb {  
      background-color: #224F22;
      border: 1px solid #224F22;
      border-radius: 10px;
    }  
    .scroll_text::-webkit-scrollbar-thumb:hover {  
          -color: #000;  
    }  

    .scroll_text2{
        height:450px;
        overflow:auto;
        padding:0px 15px;
    }

    .scroll_text2::-webkit-scrollbar {  
        width: 8px;  
    }  
    .scroll_text2::-webkit-scrollbar-track {  
        background-color: #E7E7E7
    }  
    .scroll_text2::-webkit-scrollbar-thumb {  
      background-color: rgba(223, 86, 86, 0.69);
      border: 1px solid rgba(92, 92, 92, 0.5);
      border-radius: 10px;
    }  
    .scroll_text2::-webkit-scrollbar-thumb:hover {  
        background-color: #000;  
    }
</style>
<body>
<section id="container">