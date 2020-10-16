
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="col-20" >
<body background ="https://www.softzone.es/app/uploads-softzone.es/2019/09/biblioteca.jpg">
</body>
    

<div class="modal-dialog text-center" >
   <div >
    
   <div class="col-sn-8">
     <div class="modal-content">
     <div  class="container">
     <img src="https://cdn.iconscout.com/icon/free/png-512/avatar-380-456332.png" width="150" height="150"/>
     </div>
     <div class="container">
     <div class="col-12">
     

    <form method="post" class="was-validated" action="<?php echo base_url('Login/evaluar') ?>">
    <div class="form-group">
      <label for="usuario">Usuario</label>
      <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
    </div>
    <div class="form-group">
      <label for="password">Contraseña:</label>
      <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
    </div>
      <div class="row align-items-center remember" >
            
						<input type="checkbox"> Recuerdame</imput>
            <h6><br></br></h6>
					</div>
    
    <button type="submit"  class="btn btn-primary btn-lg btn-block" >Login</button>
    </form>
     <div class="card-footer">
				<div class="d-flex justify-content-center links">
					No tienes una cuenta?<a href="<?php echo base_url('usuario/crear') ?>">Registrate</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Has olvidado tu contraseña?</a>
				</div>
			</div>
      <div class="container" >
     <div class="d-flex justify-content-center h-100">
        <div class="card">
        <div class="card-header" >
				
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square fa-3x" style="color:157587;" ></i></span>
					<span><i class="fab fa-google-plus-square fa-3x" style="color:157587;"></i></span>
					<span><i class="fab fa-twitter-square fa-3x" style="color:157587;" ></i></span>
				</div>
		  	</div>
        </div>
      </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    </div>
</div>
