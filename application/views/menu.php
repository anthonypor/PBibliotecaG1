<<<<<<< HEAD
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="<?php echo base_url(); ?>" >inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Welcome/confidencial'); ?>"> Informacion confidencial </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Welcome/confidencial2'); ?>">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login'); ?>">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?php echo base_url('Login/salir'); ?>" tabindex="-1" aria-disabled="true">logout</a>
      </li>
    </ul>
  </div>
</nav>
<div >
    <img src="https://images8.alphacoders.com/718/718915.jpg"width="1400" height="550">
</div>
=======
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
<h1 align="center" class="text-white bg-dark"> Biblioteca </h1>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="welcome">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="login">Login<span class="sr-only">(current)</span></a>
      </li>
      <a class="nav-link" href="usuario">Usuarios <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="ejemplar">Ejemplares <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="categoria">Categoria <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    
>>>>>>> e2ecc16a02d5237759c50488f144a65ac8e036b6
