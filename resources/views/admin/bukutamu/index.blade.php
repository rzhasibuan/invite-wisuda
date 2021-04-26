@extends('admin.templates.default')
@section('style_datatable')
<link rel="stylesheet" href="{{asset('public/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection


@section('content')



              <div class="box">
            <div class="box-header">
            
                <form action="{{route('tamu.store')}}" method="POST" id="scan">
                        @csrf
                        <label for="kehadiran">Scan kehadiran disini <i class="fa fa-barcode"></i></label>
                        <input type="text" name="kehadiran" class="form-control mb-2 mt-2" required placeholder="Klik disini untuk scan kehadiran" id="barcodeKehadiran">
                </form>                

               
            </div>
              
            {{-- @include('admin.templates.partials.alert') --}}
            <!-- /.box-header -->
            <div class="box-body">
 <h3 class="box-title">Daftar hadir peserta wisuda </h3>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Prodi</th>
                    <th>Katerangan</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($data as $dt)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$dt->mahasiswa->npm}}</td>
                    <td>{{$dt->mahasiswa->nama}}</td>
                    <td>{{$dt->mahasiswa->fakultas}}</td>
                    <td>{{$dt->mahasiswa->prodi}}</td>
                    <td>{{$dt->kehadiran}}</td>

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
                    <th>Katerangan</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


          <div class="tes">
                {{-- <h2>One-Dimensional (1D) Barcode Types</h2><br/> --}}
                {{-- <div>{!!DNS1D::getBarcodeHTML(8889899, 'C39')!!}</div></br>
                <div>{!!DNS1D::getBarcodeHTML(5436564, 'S25')!!}</div></br> --}}
                {{-- <div>{!!DNS1D::getBarcodeHTML(77656765, 'I25')!!}
                    77656765
                </div></br> --}}                   
                {{-- <div>{!!DNS2D::getBarcodeHTML(335553, 'QRCODE')!!}</div></br> --}}
                {{-- <div>{!!DNS1D::getBarcodeHTML(6435636, 'MSI+')!!}</div></br>
                <div>{!!DNS1D::getBarcodeHTML(25547, 'POSTNET')!!}</div></br> --}}
          </div>
@endsection


@section('js_datatable')
<script src="{{asset('public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/bower_components/bs-notify/bootstrap-notify.min.js')}}"></script>
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

  let barcodeKehadiran = $('#barcodeKehadiran')
  barcodeKehadiran.focus()

  barcodeKehadiran.on('keyup',function(){
       let auto = setTimeout(function () {
               $('#scan').submit()
            }, 1800);
  })

  document.addEventListener('keydown', function (event) {
        if( event.keyCode == 13 || event.keyCode == 16 ||  event.keyCode == 17 ) {
                event.preventDefault();
                    return;
                }

                if(event.ctrlKey) {
                    event.preventDefault();
                    return;
                }
          
    });

  window.close();

</script>
@endsection