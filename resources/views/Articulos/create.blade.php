<div class="modal fade" id="modal_create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  {!!Form::open(array('url'=>'Articulos','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
  {{Form::token()}}

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Articulo</h4>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                          <label for="first_name">Nombres</label>
                          <input class="form-control" style="height:40px;" name="nombre" type="text" >
                    </div>

                    <div class="form-group">
                        <label for="last_name">Precio</label>
                        <input class="form-control" style="height:40px;" name="precio" type="text" >
                    </div>

                    <div class="form-group">
                        <label for="last_name">Unidad</label>
                        <select class="form-control" style="height:40px;">
                        <option>c/u</option>
                        <option>m</option>
                        <option>gr</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="last_name">Categoría</label>
                        <select class="form-control" style="height:40px;" name="categoria">
                        <option value="Adornos">Adornos</option>
                        <option value="Costura">Costura</option>
                        <option value="Botones">Botones</option>
                        <option value="Cintas">Cintas</option>
                        <option value="Cordones">Cordones</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="email">Stock</label>
                        <input class="form-control" style="height:40px;" name="stock" type="text" >
                    </div>

                    <div class="form-group">
                        <label for="email">Imagen</label>
                        <input class="form-control" style="height:40px;" name="imagen" type="file" >
                    </div>
                </div>

                <div class="modal-footer">

                  <button type="reset" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  				<button type="submit" class="btn btn-success" style="color:#fff;">Guardar</button>
                    </div>
            </div>
  {!!Form::close()!!}
        </div>
      </div>
