@extends('admin.master')

@section('content')
@section('title', 'Formulario Roles')

<section class="content-header">
    <h1>
      Crear  Rol
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li><a href="{{ url('panel/roles') }}">Roles</a></li>
      <li class="active">Formulario Roles</li>
    </ol>
</section>

<section class="content">
        <div class="row">
          <div class="box box-primary">
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" class="form">
                  <div class="box-body">
                    <fieldset>
                      <legend>Informaci&oacute;n General</legend>
                      
                      <div class="col-lg-4">
                          <label id="l_nombre">Nombre</label>
                          <div class="input-group margin-bottom-20">
                              <span class="input-group-addon"><i class="fas fa-file-signature"></i></span>
                              <input type="text" id="nombre" name="nombre" value="" class="form-control">
                          </div>
                      </div>
                    
                      <div class="col-lg-4">
                          <label id="l_descripcion">Descripci&oacute;n</label>
                          <textarea class="form-control" name="descripcion" cols="39" rows="2"  id="descripcion" ></textarea>
                      </div>
                    </fieldset>
                  </div>
                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <div class="pull-right col-lg-3 col-xs-12 col-md-5 col-sm-6">
                        <div class="col-lg-6">
                            <a class="btn btn-danger" href="{{ url('panel/roles')}}" style="float: right">Cancelar <i class="fa fa-ban"></i></a>
                        </div>
                        <div class="col-lg-6">
                                <button type="submit" class="btn btn-success">Guardar <i class="fa fa-save"></i></button>
                        </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.box -->
        </div>
</section>
@endsection