<?php include(HTML_DIR . 'overall/head.php'); ?>

 <body>
 <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 	<?php include(HTML_DIR . '/overall/nav.php'); ?>
	<section class="mbr-section mbr-after-navbar">
	  <div class="mbr-section__container container mbr-section__container--isolated">
		<div class="row categorias_con_foros">
		   <div class="col-sm-12">
		   <?php

				  $s= $_GET['usr'];


				?>
		       <div class="row titulo_categoria">Hola <?= strtoupper($_users[$_SESSION['app_id']]['user']) ?>. El usuario que estas evaluando es <?= strtoupper($_users[$s]['nombres']);?></div>
		       	<div class="row cajas">
		       	<div class="col-md-12">
				<form class="form-horizontal" action="?view=evaluador&mode=<?= $_GET['ctg'];?>" method="POST" enctype="application/x-www-form-urlencoded">

					<input type="hidden" name="usuario" value="<?php echo $_GET['usr'];?>">
					<input type="hidden" name="evaluador" value="<?php echo $_GET['edr'];?>">
					<input type="hidden" name="area" value="<?php echo $_users[$s]['area'];?>">
          <input type="hidden" name="categoria" value="<?php echo $_GET['ctg'];?>">
					<input type="hidden" name="history" value="<?php echo $_GET['his'];?>">

				  	<table class="table table-striped">
				  		<div class="row">

					 	 <tr class="success">
						  <div class="col-md-8"><td style="text-align: center; "> PREGUNTAS </td></div>
						  <div class="col-md-4"><td style="text-align: center; "><div class="glyphicon glyphicon-question-sign"></div></td><td style="text-align: center; ">Nunca</td><td style="text-align: center; ">Casi Nunca</td><td style="text-align: center; ">Algunas Veces</td><td style="text-align: center; ">Casi Siempre</td><td style="text-align: center; ">Siempre</td>
						  </div>
						 </tr>
						</div>
					 	<?php

						 	 include(HTML_DIR . 'qhse/competencias/comunicacion.php');
						 	 include(HTML_DIR . 'qhse/competencias/efectividad.php');
						 	 include(HTML_DIR . 'qhse/competencias/habilidad.php');
						 	 include(HTML_DIR . 'qhse/competencias/liderasgo.php');
						 	 include(HTML_DIR . 'qhse/competencias/profesional.php');
						 	 include(HTML_DIR . 'qhse/competencias/etica.php');
						 	 if ($_GET['ctg'] == 1) {
						 	 	include(HTML_DIR . 'qhse/competencias/mandogerencial.php');
						 	 	include(HTML_DIR . 'qhse/competencias/gerencia.php');
						 	 }else if ($_GET['ctg'] == 2) {
						 	 	include(HTML_DIR . 'qhse/competencias/mandomedio.php');
						 	 	include(HTML_DIR . 'qhse/competencias/gerencia.php');
						 	 }else if ($_GET['ctg'] == 4){
						 	 	include(HTML_DIR . 'qhse/competencias/mandohse.php');
						 	 	include(HTML_DIR . 'qhse/competencias/gerencia.php');
						 	 }else{
						 	 	include(HTML_DIR . 'qhse/competencias/trabajadoroperativo.php');
						 	 }
						 	 if($_users[$_SESSION['app_id']]['id'] != $s){
                include(HTML_DIR . 'qhse/competencias/preabierta.php');

						 	 }

					 	?>
					</table>
					<div class="col-sm-offset-10 col-sm-2">
					      <button type="submit" class="btn btn-default">ENVIAR</button>
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
