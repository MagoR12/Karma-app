@extends('admin.master')

@section('content')
@section('title', 'Formulario Usuarios')

<section class="content-header">
    <h1>
      Crear  Usuario
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li><a href="{{ url('panel/usuarios') }}">Usuario</a></li>
      <li class="active">Formulario Usuario</li>
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
                            <label id="l_email">Email</label>
                            <div class="input-group margin-bottom-20">
                                <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                                <input type="email" id="email" name="email" value="" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-3">
                                <label id="l_id_rol">Rol</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <select class="form-control select2"  id="id_rol" name="id_rol">
                                      <option value="">[Seleccionar]</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div><br/>
                    
                            <div class="col-lg-4">
                                    <label id="l_password">Contrase&ntilde;a</label>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>
                                        <input type="password" id="password" name="password" value="" class="form-control">
                                    </div>
                             </div>
                             <div class="col-lg-4">
                                    <label id="l_password">Repetir Contrase&ntilde;a</label>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>
                                        <input type="password" id="password" name="password" value="" class="form-control">
                                    </div>
                             </div>
                    </fieldset>
                  </div>
                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <div class="pull-right col-lg-3 col-xs-12 col-md-5 col-sm-6">
                        <div class="col-lg-6">
                            <a class="btn btn-danger" href="{{ url('panel/usuarios')}}" style="float: right">Cancelar <i class="fa fa-ban"></i></a>
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