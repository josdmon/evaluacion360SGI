  <div class="modal fade" id="Registro" role="dialog">
   <div class="modal-dialog">

     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
       </div>
       <div id="_AJAX_REG_"></div>
       <div class="modal-body">
         <div role="form"  onkeypress="return runScriptReg(event)">
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
             <input type="text" class="form-control" id="user_reg" placeholder="Introduce un nombre de usuario">

           </div>
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-user"></span> Nombre</label>
             <input type="text" class="form-control" id="nombres_reg" placeholder="Introduce un nombre">

           </div>
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-user"></span> Apellido</label>
             <input type="text" class="form-control" id="apellidos_reg" placeholder="Introduce un apellido">

           </div>
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-user"></span> Cedula</label>
             <input type="text" class="form-control" id="cedula_reg" placeholder="Introduce una cedula">

           </div>
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Email</label>
             <input type="email" class="form-control" id="email_reg" placeholder="Introduce tu correo electrónico">
           </div>
           <div class="form-group">
             <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
             <input type="text" class="form-control" id="pass_reg" placeholder="Introduce tu contraseña">
           </div>
           <div class="form-group">
             <label for="psw_two"><span class="glyphicon glyphicon-eye-open"></span> Repite tu Contraseña</label>
             <input type="text" class="form-control" id="pass_reg_dos" placeholder="Introduce tu contraseña de nuevo">
           </div>
           <div class="checkbox">
             <label><input type="checkbox" id="tyc_reg" value="1" checked>Acepto los T&C</label>
           </div>
           <button type="button" onclick="goReg()" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Registrarme</button>
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
       </div>
     </div>
   </div>
 </div>
 <script src="views/app/js/reg.js"></script>
