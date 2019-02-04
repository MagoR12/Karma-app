@extends("admin.master")


@section('title', 'Usuarios')
@section("content")

<section class="content-header">
    <h1>
       Usuarios
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer-alt"></i>Panel Control</a></li>
      <li><a class="active">Usuarios</a></li>
     
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-lg-12">

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Listado  Usuarios</h3>
    </div>
    <!-- /.box-header -->  
    <div class="box-body">  
      
        <div class="mailbox-controls" style="float: right;">
        <a class="btn btn-success" href="{{ url('panel/usuarios/create') }}">Nuevo<i class="fas fa-plus-circle"></i></a>
        </div>
      
      <div class="clearfix"></div>

      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Descripci&oacute;n</th>
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
          <td style="width: 10%;">
            
            <a class="btn btn-info btn-sm">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
            </a>
            
          </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Descripci&oacute;n</th>
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