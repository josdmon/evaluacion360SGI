  <div class="modal fade" id="Lostpass" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Recuperar Contraseña</h4>
        </div>
        <div id="_AJAX_LOSTPASS_"></div>
        <div class="modal-body">
          <div role="form">
            <div class="form-group" onkeypress="return runScriptLostpass(event)">
              <label for="usrname"><span class="glyphicon glyphicon-enveloper"></span> Email</label>
              <input type="email" class="form-control" id="email_lostpass" placeholder="Enter email">
            </div>
            <button type="button" class="btn btn-default btn-success btn-block" onclick="goLostpass()"><span class="glyphicon glyphicon-off"></span> Recuperar</button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <script src="views/app/js/lostpass.js"></script>