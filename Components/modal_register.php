<!-- Modal para el registro de nueva cita -->
<div class="modal fade" id="m_registro_cita_nueva" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> <i class="fas fa-user-plus"></i> Registrar Nueva Cita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="registrar_cita.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre Completo</label>
              <input type="text" class="form-control" name="pa_nombre" id="pa_nombre" aria-describedby="panameHelp" placeholder="Nombre del Paciente">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Fecha</label>
              <input type="date" class="form-control" name="pa_fecha" id="pa_fecha" placeholder="Fecha">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nota</label>
              <textarea class="form-control" name="pa_notas" id="pa_notas" rows="3"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-primary" value="Guardar Cita">
        </div>
      </form>
    </div>
  </div>
</div>