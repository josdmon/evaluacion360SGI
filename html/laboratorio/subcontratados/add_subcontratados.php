<?php include(HTML_DIR . 'overall/head.php'); ?>


<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Completado!</strong> el subcontratado ha sido creado.
    </div>';
  }
  if(isset($_GET['error'])) {
    if($_GET['error'] == 1) {
      echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> todos los campos deben estar llenos.
      </div>';
    } else {
      echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> debe existir una categoría para asociar al foro.
      </div>';
    }
  }
  ?>

  <div class="row container">
    <div class="pull-right">
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=subcontratados">GESTIÒN DE SUBCONTRATADOS</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
          <a class="mbr-buttons__btn btn btn-danger active" href="?view=subcontratados&mode=add">CREAR SUBCONTRATADOS</a>
        </li></ul></div>
   </div>

      <ol class="breadcrumb">
        <li><a href="?view=index"><i class="fa fa-comments"></i> Subcontratados</a></li>
      </ol>
  </div>

<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Gestión de Subcontratados</div>
      <div class="row cajas">
        <div class="col-md-12">

          <form class="form-horizontal" action="?view=subcontratados&mode=add" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Proveedor Subcontratados</label>
              <div class="col-lg-10">
                <select name="proveedor" class="form-control">
                  <?php
                    if(false != $_prosub) {
                      foreach($_prosub as $id_proveedor => $array_cliente) {
                        echo '<option value="'.$id_proveedor.'">'.$_prosub[$id_proveedor]['nombre'].'</option>';
                      }
                    } else {
                      echo '<option value="0">No existe usuario</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Fecha de Envio</label>
              <div class="col-lg-4">
                <input type='date' name="fecha_s" class='form-control form-control-sm'>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Opciones de la tabla</label>
              <div class="col-lg-10">
                <input type="button" class="mbr-buttons__btn btn btn-danger" id="add" value="Añadir una nueva fila">
                <input type="button" class="mbr-buttons__btn btn btn-danger" id="del" value="Eliminar la ultima fila">
              </div>
            </div>

            <table class="table table-sm table-hover table-striped" id="tabla">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Código</th>
                  <th scope="col">Matriz</th>
                  <th scope="col">Tipo de Muestra</th>
                  <th scope="col">Fecha de Muestra</th>
                  <th scope="col">Análisis Solicitados</th>
                  <th scope="col">Estado de la Muestra</th>
                </tr>
              </thead>
              <tbody>
                <script type="text/javascript">
                  $(document).ready(function(){
                    /**
                      Funcion para añadir una nueva columna en la tabla
                    */
                    $("#add").click(function(){
                      // Obtenemos el numero de filas (td) que tiene la primera columna
                      // (tr) del id "tabla"
                      var tds=$("#tabla tr:first td").length;
                      // Obtenemos el total de columnas (tr) del id "tabla"
                      var trs=$("#tabla tr").length;
                      var nuevaFila="<tr>";

                      // añadimos las columnas
                      nuevaFila+="<th>"+(trs)+"</th>";
                      nuevaFila+="<td><input type='text' name='codigo"+(trs)+"' class='form-control form-control-sm' placeholder='Código'></td>";
                      nuevaFila+="<td><select name='matriz"+(trs)+"' class='custom-select custom-select-sm'><option value='-' selected>-</option><option value='Agua'>Agua</option><option value='Suelo'>Suelo</option><option value='Aire'>Aire</option></select></td>";
                      nuevaFila+="<td><select name='tipo_m"+(trs)+"' class='custom-select custom-select-sm'><option value='-' selected>-</option><option value='Natural lotico'>Natural lotico</option><option value='Natural lentico '>Natural lentico </option><option value='Residual domestico'>Residual domestico</option><option value='Residual industrial'>Residual industrial</option><option value='Superficial '>Superficial </option><option value='Subterránea'>Subterránea</option><option value='Agua para uso domestico'>Agua para uso domestico</option></select></td>";
                      nuevaFila+="<td><input name='fecha_m"+(trs)+"' type='date' class='form-control form-control-sm'></td>";
                      nuevaFila+="<td><input name='analisis"+(trs)+"' type='text' class='form-control form-control-sm'></td>";
                      nuevaFila+="<td><select name='estado_m"+(trs)+"' class='custom-select custom-select-sm'><option value='-' selected>-</option><option value='Refrigerado'>Refrigerado</option><option value='Preservado'>Preservado</option></select></td>";
                      nuevaFila+="<input name='contador' type='hidden' value='"+(trs)+"'>";
                      nuevaFila+="</tr>";
                      $("#tabla").append(nuevaFila);
                    });

                    /**
                     * Funcion para eliminar la ultima columna de la tabla.
                     * Si unicamente queda una columna, esta no sera eliminada
                     */
                    $("#del").click(function(){
                      // Obtenemos el total de columnas (tr) del id "tabla"
                      var trs=$("#tabla tr").length;
                      if(trs>1)
                      {
                          // Eliminamos la ultima columna
                          $("#tabla tr:last").remove();
                      }
                    });
                  });
                </script>
              </tbody>
            </table>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Resetear</button>
                <button type="submit" class="btn btn-primary">Crear</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>

</div>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
