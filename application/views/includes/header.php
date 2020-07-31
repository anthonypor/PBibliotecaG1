<!DOCTYPE html>
<html>
<head>
    <title>Basic Crud operation in Codeigniter 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
<div class="container">
<div>
<h1 align="center" class="text-white bg-dark"> Ejemplar de Obras </h1>
</div>
<div class="row">
    <div class="col-lg-12">                     
            <div class="pull-right">
               <a class="btn btn-primary fas fa-plus-square" href="<?php echo base_url('ejemplar/create') ?>"> Crear un nuevo ejemplar </a>
            </div>
     </div>
</div>