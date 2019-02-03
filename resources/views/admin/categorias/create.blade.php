@extends('admin.master')

@section('content')
@section('title', 'Formulario Categoría')

<section class="content-header">
    <h1>
      Crear Categor&iacute;as
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li><a href="{{ url('panel/categorias') }}">Categor&iacute;as</a></li>
      <li class="active">Formulario categor&iacute;a</li>
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
                          <label id="l_imagen">Imagen Principal</label>
                          <div class="input-group margin-bottom-20">
                              <span class="input-group-addon"><i class="fas fa-images"></i></span>
                              <input type="file" id="imagen" name="imagen" value="" class="form-control" style="padding:0px;" />
                          </div>
                      </div>

                      <div class="col-lg-1">
                          <label id="l_dependecy">Submenu</label>
                          <div class="input-group margin-bottom-20">
                              <div class="radio">
                                  <label>
                                    <input type="radio" name="dependecy" id="optionsRadiosSi" value="si" checked="">
                                    Si
                                  </label>
                                  <label>
                                      <input type="radio" name="dependecy" id="optionsRadiosNo" value="no" checked="">
                                      No
                                  </label>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3">
                          <label id="l_id_dependency">Dependencia</label>
                          <div class="input-group">
                              <div class="input-group-addon">
                                  <i class="fas fa-search"></i>
                              </div>
                              <select class="form-control select2"  id="id_dependency" name="id_dependency">
                                <option value="">[Seleccionar]</option>
                              </select>
                          </div>
                      </div>

                      <div class="clearfix"></div><br/>
                      <div class="col-lg-4">
                          <label id="l_descripcion">Descripci&oacute;n</label>
                          <textarea class="form-control" name="descripcion" cols="39" rows="2"  id="descripcion" ></textarea>
                      </div>
                    </fieldset>
                  </div>
                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="float: right">Enviar</button>
                  </div>
                </form>
              </div>
              <!-- /.box -->
        </div>
</section>
@endsection