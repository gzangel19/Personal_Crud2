<div id="modalmantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <form method="post" id="producto_form">
                
                <div class="modal-header">
                
                    <h4 class="modal-title" id="mdltitulo"></h4>
                
                </div>
                
                <div class="modal-body">
                    
                    <input type="hidden" id="prod_id" name="prod_id">

                    <div class="form-group">
                        
                        <label class="form-label" for="prod_nombre">Nombre</label>
                        
                        <input type="text" class="form-control" id="prod_nombre" name="prod_nombre" placeholder="Ingrese Nombre" required>
                    
                    </div>

                    <div class="form-group">
                        
                        <label class="form-label" for="prod_descripcion">Descripcion</label>

                        <textarea rows="3" placeholder="Ingrese Descripcion" id="prod_descripcion" name="prod_descripcion"  class="form-control" required></textarea>
                    
                    </div>

                </div>
                
                <div class="modal-footer">

                    <button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal" id="btnCerrarModal">Cerrar</button>
                
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                
                </div>

            </form>
            
        </div>
    
    </div>

</div>