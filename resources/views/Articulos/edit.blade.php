<div class="modal fade" id="modal-edit-{{$art->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	{!!Form::model($art,['method'=>'PATCH','route'=>['Articulos.update',$art->id]])!!}

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                    <h4 class="modal-title" id="myModalLabel">Editar Articulo</h4>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                          <label for="first_name">Nombres</label>
                          <input class="form-control" style="height:40px;" name="nombre" type="text" value="{{$art->nombre}}">
                    </div>

                    <div class="form-group">
                        <label for="last_name">Precio</label>
                        <input class="form-control" style="height:40px;" name="precio" type="text" value="{{$art->precio}}">
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
                        <input class="form-control" style="height:40px;" name="stock" type="text" value="{{$art->stock}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Imagen</label>
                        <input class="form-control" style="height:40px;" name="imagen" type="file" >
												<img src="{{asset('img/'.$art->imagen)}}" alt="{{ $art->nombre}}" height="80px" width="80px">

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
