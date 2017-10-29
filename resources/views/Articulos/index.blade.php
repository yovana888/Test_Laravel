@extends ('layout.admin')
@section ('contenido')
<div class="profile-header" id="rem2">
<!-- BEGIN profile-header-cover -->
<div class="profile-header-cover" ></div>
<!-- END profile-header-cover -->
<!-- BEGIN profile-header-content -->
<div class="profile-header-content">

  <div class="profile-header-info">

    <h4>Sistema de Gestión de Inventario</h4>

      <a href="#" class="btn btn-xs" style="background:#bd6eca; color:#fff;">Administrador / Almacen</a>

  </div>
  <!-- END profile-header-info -->
</div>

</div>

<br>
  <ul class="breadcrumb " style="margin-left: 3%; ">
    <li><a href="#" id="m1" style="color:#e91e63;">ALMACEN</a></li>
    <li class="active" id="m2">ARTICULOS</li>
  </ul>

  <div class="panel panel-default " style="margin-left: 3%; margin-right :3%;" id="rem1">
        <div class="panel-heading" style="">
            <div class="panel-heading-btn" >
              <div class="dropdown dropdown-icon">
                  <a href="javascript:;" class="btn" data-toggle="dropdown"><i class="glyphicon glyphicon-option-vertical"></i></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#">IMPORT</a></li>
                    <li><a href="#">EXPORT</a></li>
                    <li class="divider"></li>
                    <li><a href="#">SETTINGS</a></li>
                  </ul>
                </div>
                <a href="javascript:;" class="btn" data-toggle="panel-expand"><i class="glyphicon glyphicon-resize-full"></i></a>
                <a href="javascript:;" class="btn" data-toggle="panel-reload"><i class="glyphicon glyphicon-repeat"></i></a>
                <a href="javascript:;" class="btn" data-toggle="panel-collapse"><i class="glyphicon glyphicon-chevron-up"></i></a>
                <a href="javascript:;" class="btn" data-toggle="panel-remove"><i class="glyphicon glyphicon-remove"></i></a>
            </div>
            <h4><span style="color:#9c27b0;">Artículos</span> Registrados</h4>
        </div>
<!-- END panel-heading -->
<!-- BEGIN panel-body -->
        <div class="panel-body">

          <div class="table-responsive">
          <table id="" class="table  m-1">
				<thead>
					<tr style="text-align:center; " >
						<th style="white-space: nowrap; width:2%">#</th>
						<th style="white-space: nowrap; color:#888;">Imagen</th>
						<th style="white-space: nowrap; color:#888;" >Nombre</th>
            <th style="white-space: nowrap; color:#888;">Categoría</th>
						<th style="white-space: nowrap; color:#888;">Precio</th>
						<th style="white-space: nowrap; color:#888;">Stock</th>
						<th style="white-space: nowrap; color:#888;">Editar</th>
						<th style="white-space: nowrap;color:#888;">Eliminar</th>
            <th style="white-space: nowrap;color:#888;">Ver</th>
					</tr>
				</thead>
				<tbody>
          <!--Inicio Foreach-->
          @foreach ($articulos as $art)
					<tr style="color:#777;">
                <th> {{$art->id}} </th>
                <th><img src="{{asset('img/'.$art->imagen)}}" alt="{{ $art->nombre}}" height="60px" width="60px"></th>
                <th> {{$art->nombre}} </th>
                <th> {{$art->categoria}} </th>
                <th> {{$art->precio}}</th>
                <th> {{$art->stock}}</th>
                <th>
                  <a href=""  data-target="#modal-edit-{{$art->id}}" data-toggle="modal"><button class="btn btn " style="background:#ff5160; color:#fff;"><i class="ti-pencil"></i></button></a>
                </th>
                <th>
                  <a href=""  data-target="#modal-delete-{{$art->id}}" data-toggle="modal"><button class="btn btn-danger " ><i class="ti-trash"></i></button></a>
                </th>
                <th>
                  @include('Articulos.show',[$art])
                  <a href=""  data-target="#modal-show-{{$art->id}}" data-toggle="modal"><button class="btn btn-info  " ><i class="ti-list"></i></button></a>
                </th>
					</tr>
          @include('Articulos.edit',[$art])
          @include('Articulos.delete',[$art])
          @endforeach
          <!--Fin Foreach-->
				</tbody>
			</table>

      <ul class="pagination" >
                   <li><a href="#"><span class="ti-angle-double-left"><span></a></li>
                   <li class="active"><a href="#">1</a></li>
                   <li><a href="#" disabled><span class="ti-angle-double-right"><span></a></li>
     </ul>
    </div>

        </div>

        <div class="panel-footer clearfix">
								@include('Articulos.create')
                 <a href=""  data-target="#modal_create" data-toggle="modal"><button class="btn btn-pink btn-sm pull-left m-l-5" >Nuevo Articulo</button></a>
								  <a href=""  data-target="#" data-toggle="modal"><button class="btn btn btn-sm pull-left m-l-5" style="background:#999999;color:#fff;">Reporte Avanzado</button></a>
        </div>
  </div>
        @push ('scripts')
        	<script src="{{asset('assets\plugins\jquery\jquery-1.9.1.min.js')}}"></script>
         @endpush
@endsection
