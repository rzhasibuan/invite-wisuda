@extends('admin.templates.default')

@section('content')
    <div class="row">
    <div class="col-md-12">

       
                
     <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-header">
                <form action="{{route('kupon.store')}}" method="POST" id="scan">
                    @csrf
                    <label for="barcode">Scan kupon makanan <i class="fa fa-barcode"></i> </label>
                    <input type="text" name="barcode" class="form-control mb-2 mt-2" required placeholder="Klik disini untuk scan kupon makanan" id="barcode">
                </form> 
            </div>
            {{-- <div class="box-body box-profile">
  
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Atas Nama</b> <a class="pull-right">Reza afri suhangga hasibuan</a>
                </li>
                <li class="list-group-item">
                  <b>Program Studi</b> <a class="pull-right">S1 Farmasi</a>
                </li>
                <li class="list-group-item">
                  <b>Fakultas</b> <a class="pull-right">Farmasi</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah makanan</b> <a class="pull-right">4 kotak</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Ambil</b></a>
            </div> --}}
            <!-- /.box-body -->

              <div class="box-body">
              <h3 class="box-title">Daftar Peserta yang sudah memakai kupon </h3>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Katerangan pemakaian kupon</th>
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
                    {{-- <td>{{$dt->status}}</td> --}}
                    <td>Sudah dipakai</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Katerangan pemakaian kupon</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>

          {{-- <a href="{{route('kupon.show',['id'=> '1'])}}">tes aja dulu</a> --}}
          <!-- /.box -->
    </div>
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

        let barcodeKehadiran = $('#barcode')
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