<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-show-{{$art->id}}">
<div class="modal-dialog">
    <br><br><br><br>
            <div class="modal-content">
                  <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"> Información :</h4>
                    </div>
                    <div class="modal-body">
                          <div class="row">
                                <div class="col-lg-8">

                                      <ul>
                                        <li><strong>Nombre:</strong>  {{ $art->nombre }}</li> <br>
                                        <li><strong>Categoría:</strong>  {{ $art->categoria }}</li> <br>
                                        <li><strong>Precio:</strong>{{ $art->precio  }} </li> <br>
                                        <li><strong>Stock:</strong>{{ $art->stock }}</li><br>
                                      </ul>

                                  </div>
                                  <div class="col-lg-4">
                                    <img src="{{asset('img/'.$art->imagen)}}" alt="{{ $art->nombre}}" height="80px" width="80px" style="margin-top:20px;">
                                  </div>
                            </div>
                                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>

          </div>
  </div>
</div>
