<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$art->id}}">
	{{Form::Open(array('action'=>array('ArticuloController@destroy',$art->id),'method'=>'delete'))}}
	<div class="modal-dialog">
      <br><br><br><br>
            <div class="modal-content">
                  <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Eliminar Articulo :</h4>
                  </div>
                      <div class="modal-body" >
                          <p><span>¿Estás seguro de que deseas eliminar a <a href="#"></a>  {{ $art->nombre}}? </span></p>
                      </div>
                  <div class="modal-footer">
                          <button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>
													<button type="submit" class="btn btn" style="background:#ff5252; color:#fff;">Confirmar</button>
                  </div>
          </div>
    </div>

	</div>
	{{Form::Close()}}
</div>
