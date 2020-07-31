
<h1>Informacion de las Obras</h1>
<form method="post" action="<?php echo base_url('ejemplar/guardar') ?>">
<div class="form-group">
    <label>Titulo del libro</label>
    <input type="text" class="form-control" name="ejem_titulo" placeholder="Titulo">
    
  </div>
  <div class="form-group">
    <label>Editorial</label>
    <input type="text" class="form-control" name="ejem_editorial" placeholder="Editorial">
    
  </div>
  <div class="form-group">
    <label>Paginas</label>
    <input type="text" class="form-control" name="ejem_paginas" placeholder="Paginas">
    
  </div>
  <div class="form-group">
    <label>Idioma</label>
    <input type="text" class="form-control" name="ejem_idioma" placeholder="Idioma">
    
  </div>
  <div class="form-group">
    <label>Audio</label>
    <input type="text" class="form-control" name="ejem_audio" placeholder="Audio">
    
  </div>
  <div class="form-group">
    <label>Resumen</label>
    <input type="text" class="form-control" name="ejem_resumen" placeholder="Resumen">
    
  </div>
  <div class="form-group">
    <label>Año</label>
    <input type="text" class="form-control" name="ejem_anio" placeholder="Año">
    
  </div>
<p>
<input type="submit" value="Guardar" class="btn btn-primary">
</p>

</form>