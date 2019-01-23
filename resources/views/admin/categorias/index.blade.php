@extends("admin.master")


@section('title', 'Categoria')
@section("content")

<section class="content-header">
    <h1>
      Categorias
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer-alt"></i>Principal</a></li>
      <li><a class="active">Categoria</a></li>
     
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Listado Categoria</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="mailbox-controls" style="float:right;">
            <div class="btn-group">
            <a href="{{ url('panel/categorias/create') }}" id="btn-add" class="btn btn-default btn-md"><i class="fa fa-plus-circle"></i><br/><span>Nuevo</span></a>
                <a href="admin/clientes/edit" id="btn-edit"class="btn btn-default btn-md"><i class="fa fa-edit"></i><br/><span>Editar</span></a>
                <a href="admin/clientes/activate" id="btn-activate"class="btn btn-default btn-md"><i class="fa fa-check-circle"></i><br/><span>Activar</span></a>
                <a href="admin/clientes/delete" id="btn-delete" class="btn btn-default btn-md"><i class="fa fa-minus-circle"></i><br/><span>Eliminar</spa></a>
            </div><!-- /.btn-group -->
        </div>
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Submenu</th>
          <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 4.0
          </td>
          <td>Win 95+</td>
          <td> 4</td>
        </tr>
       
        </tbody>
        <tfoot>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Submenu</th>
          <th>Opciones</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
      </div>
    </div>
  </section>

@endsection