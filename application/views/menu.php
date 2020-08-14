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
