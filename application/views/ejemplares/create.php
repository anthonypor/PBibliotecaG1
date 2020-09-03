<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<h1>Informacion de las Obras</h1>
<?php 
  echo form_open('ejemplar/guardar');
  $data_n= array(
    'id'=>'1',
    'name'=>'ejem_titulo',
    'class'=>'form-control',
    'placeholder'=>'Titulo'
  );
  echo form_label('Titulo:','1');
  echo form_input($data_n,"");
  $data_e= array(
    'id'=>'2',
    'name'=>'ejem_editorial',
    'class'=>'form-control',
    'placeholder'=>'Editorial'
  );
  echo form_label('Editorial:','2');
  echo form_input($data_e,"");
  $data_p= array(
    'id'=>'3',
    'name'=>'ejem_paginas',
    'class'=>'form-control',
    'placeholder'=>'Paginas'
  );
  echo form_label('Paginas:','3');
  echo form_input($data_p,"");
  $data_i= array(
    'id'=>'4',
    'name'=>'ejem_idioma',
    'class'=>'form-control',
    'placeholder'=>'Idioma'
  );
  echo form_label('Idioma:','4');
  echo form_input($data_i,"");
  $data_a= array(
    'id'=>'5',
    'name'=>'ejem_audio',
    'class'=>'form-control',
    'placeholder'=>'Audio'
  );
  echo form_label('Audio:','5');
  echo form_input($data_a,"");
  $data_r= array(
    'id'=>'6',
    'name'=>'ejem_resumen',
    'class'=>'form-control',
    'placeholder'=>'Resumen:'
  );
  echo form_label('Resumen:','6');
  echo form_input($data_r,"");
  $data_t= array(
    'id'=>'7',
    'name'=>'ejem_tipo_id',
    'class'=>'form-control',
    'placeholder'=>'Tipo:'
  );
  echo form_label('Tipo:','7');
  echo form_input($data_t,"");
  
  $data_an= array(
    'id'=>'9',
    'name'=>'ejem_anio',
    'class'=>'form-control',
    'placeholder'=>'Año'
  );
  echo form_label('Año:','9');
  echo form_input($data_an,"");
  echo form_label('Categoria:','categoria');
  echo form_dropdown('ejem_cate_id',$opciones);
?>  
<?php echo validation_errors(); ?>
<br>
  <input type="submit" value="Guardar" class="btn btn-primary">
<?php echo form_close(); ?>
