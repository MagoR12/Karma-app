@extends("admin.master")


@section('title', 'Posts del Blog')
@section("content")

<section class="content-header">
    <h1>
      Posts
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer-alt"></i>Principal</a></li>
      <li><a class="active">Posts</a></li>
     
    </ol>
  </section>


  <section class="content">
    <div class="row">
      <div class="col-xs-12">

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Listado Posts</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
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
          <td>X</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 5.0
          </td>
          <td>Win 95+</td>
          <td>5</td>
          <td>C</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
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