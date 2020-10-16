
<h1>Informacion de las Obras</h1>
<?php 
  echo form_open_multipart('ejemplar/update/'.$ejem->ejem_id);
  $data_n= array(
    'id'=>'1',
    'name'=>'ejem_titulo',
    'class'=>'form-control',
    'placeholder'=>'Titulo',
    'value'=>$ejem->ejem_titulo,
  );
  echo form_label('Titulo:','1');
  echo form_input($data_n,"");
echo '<td><font color="red">'.form_error('ejem_titulo').'</font></td>';

  $data_e= array(
    'id'=>'2',
    'name'=>'ejem_editorial',
    'class'=>'form-control',
    'placeholder'=>'Editorial',
    'value'=>$ejem->ejem_editorial,
  );
  echo form_label('Editorial:','2');
  echo form_input($data_e,"");
echo '<td><font color="red">'.form_error('ejem_editorial').'</font></td>';

  $data_p= array(
    'id'=>'3',
    'name'=>'ejem_paginas',
    'class'=>'form-control',
    'placeholder'=>'Paginas',
    'value'=>$ejem->ejem_paginas,
    
  );
  echo form_label('Paginas:','3');
  echo form_input($data_p,"");
echo '<td><font color="red">'.form_error('ejem_paginas').'</font></td>';

  $data_i= array(
    'id'=>'4',
    'name'=>'ejem_idioma',
    'class'=>'form-control',
    'placeholder'=>'Idioma',
    'value'=>$ejem->ejem_idioma,
    
  );
  echo form_label('Idioma:','4');
  echo form_input($data_i,"");
echo '<td><font color="red">'.form_error('ejem_idioma').'</font></td>';

$data_a= array(
  'name'=>'ejem_audio',
  'class'=>'form-control',
  'placeholder'=>'Imagen',
  'type'=>'file',
  'value'=>$ejem->ejem_audio,

);
echo form_label('Imagen:','ejem_audio');
echo form_input($data_a,"");
echo '<td><font color="red">'.form_error('ejem_audio').'</font></td>';

  $data_r= array(
    'id'=>'6',
    'name'=>'ejem_resumen',
    'class'=>'form-control',
    'placeholder'=>'Resumen:',
    'value'=>$ejem->ejem_resumen,
    
  );
  echo form_label('Resumen:','6');
  echo form_input($data_r,"");
echo '<td><font color="red">'.form_error('ejem_resumen').'</font></td>';

$data_t= array(
  'id'=>'7',
  'name'=>'ejem_tipo_id',
  'class'=>'form-control',
  'placeholder'=>'Tipo:',
  'value'=>$ejem->ejem_tipo_id,
);
echo form_label('Tipo:','7');
echo form_input($data_t,"");
echo '<td><font color="red">'.form_error('ejem_tipo_id').'</font></td>';

  $data_an= array(
    'id'=>'9',
    'name'=>'ejem_anio',
    'class'=>'form-control',
    'placeholder'=>'Año',
    'value'=>$ejem->ejem_anio,
    
  );
  
  echo form_label('Año:','9');
  echo form_input($data_an,"");
  echo '<td><font color="red">'.form_error('ejem_anio').'</font></td>';

  echo form_label('Categoria:','categoria');
echo form_dropdown('ejem_cate_id',$opciones,$ejem->ejem_cate_id);
  


?>  
<br>
  <input type="submit" value="Guardar" class="btn btn-primary">
<?php echo form_close(); ?>
    
</form>
</div>