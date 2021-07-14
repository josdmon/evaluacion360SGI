<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>
 <section class="mbr-section mbr-after-navbar">
   <div class="mbr-section__container container mbr-section__container--isolated">
     <div class="row container">
       <div class="pull-right">
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                <a class="mbr-buttons__btn btn btn-danger" href="?view=plan_accion_hseq">PLAN DE ACCIÓN</a>
            </li></ul></div>
        </div>
        <div class="pull-right">
             <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                 <a class="mbr-buttons__btn btn btn-danger active" href="?view=plan_accion_hseq&mode=all_plan_accion">ALL PLAN DE ACCIÓN</a>
             </li></ul></div>
         </div>

         <ol class="breadcrumb">
           <li><a href="?view=hseq&mode=evaluacion"><i class="fa fa-comments"></i> Evaluación</a></li>
         </ol>
     </div>

     <div class="row categorias_con_foros">
       <div class="col-sm-12">
        <div class="row titulo_categoria">Gestión de plan de acción</div>
        <div class="row cajas">
          <div class="col-md-12">
            <?php
            if(false != $_planaccionlin) {
             $HTML = '<table class="table table-striped table-hover table-condensed"><thead><tr>

               <th>Nombre curso</th>
               <th>Competencia</th>
               <th>Link</th>
               <th style="width: 15%">Acciones</th>
               </tr>
               </thead>
             <tbody>';
              foreach($_planaccionlin as $id_plan => $cliente_array) {
                  $HTML .= '<tr>
                    <td>'.$_planaccionlin[$id_plan]['nombre'].'</td>
                    <td>'.$_planaccionhseq[$_planaccionlin[$id_plan]['plan_accion']]['competencia'].'</td>
                    <td>'.$_planaccionlin[$id_plan]['lin'].'</td>
                    <td>
                      <div class="btn-group">
                       <a onclick="DeleteItem(\'¿Está seguro de eliminar este cliente?\',\'?view=plan_accion_hseq&mode=delete&id='.$_planaccionlin[$id_plan]['id'].'\')">Eliminar</a>
                     </div>
                    </td>
                  </tr>';
              }
              $HTML .= '</tbody></table>';
            } else {
              $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningun plan de acción.</div>';
            }
            echo $HTML;
            ?>
          </div>
          <div class="col-sm-12">
             <div class="row titulo_categoria">Pegar link plan acción</div>
             <div class="row cajas">
                <div class="col-md-12">
                  <form class="form-horizontal" action="?view=plan_accion_hseq&mode=all_plan_accion" method="POST" enctype="multipart/form-data">
                    <fieldset>
                      <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Competencia</label>
                        <div class="col-lg-10">
                          <select name="id" class="form-control">
                            <?php
                              if(false != $_planaccionhseq) {
                                foreach($_planaccionhseq as $id => $array_pla) {
                                  echo '<option value="'.$id.'">'.$_planaccionhseq[$id]['competencia'].'</option>';
                                }
                              } else {
                                echo '<option value="0">No existe usuario</option>';
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nombre del curso </label>
                        <div class="col-lg-10">
                          <input type="text" class="col-lg-10" name="nombre">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Pegar el LINK</label>
                        <div class="col-lg-10">
                          <input type="url" class="col-lg-10" name="lin">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                          <button type="reset" class="btn btn-default">Resetear</button>
                          <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>

                  </div>
                </div>
              </div>
            </div>


        </div>
       </div>
     </div>
  </div>
 </section>


 <?php include(HTML_DIR . 'overall/footer.php'); ?>
</body>
</html>
