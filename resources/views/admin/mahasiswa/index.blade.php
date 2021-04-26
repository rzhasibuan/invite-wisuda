@extends('admin.templates.default')
@section('style_datatable')
<link rel="stylesheet" href="{{asset('public/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection


@section('content')
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mahasiswa Wisuda</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Prodi</th>
                    <th>Tahun Lulus</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($data_mhs as $dt)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$dt->npm}}</td>
                    <td>{{$dt->nama}}</td>
                    <td>{{$dt->fakultas}}</td>
                    <td>{{$dt->prodi}}</td>
                    <td>{{$dt->tahun}}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                     <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Prodi</th>
                    <th>Tahun Lulus</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection


@section('js_datatable')
<script src="{{asset('public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection