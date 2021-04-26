@extends('admin.templates.default')
@section('title')Kupon Makanan @endsection

@section('content')
{{-- <div class="container"> --}}
    <div class="row">
    <div class="col-md-6">
     <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-header">
            <h3>Data kupon makan siang berhasil kami temukan</h3>
            </div>
             <div class="box-body box-profile">

            <form action="{{route('kupon.update',[$id->id])}}" method="POST">
                @csrf
                 <input type="hidden" value="PUT" name="_method">
                 <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Atas Nama</b> <a class="pull-right">{{$id->nama}}</a>
                </li>
                <li class="list-group-item">
                  <b>Program Studi</b> <a class="pull-right">{{$id->prodi}}</a>
                </li>
                <li class="list-group-item">
                  <b>Fakultas</b> <a class="pull-right">{{$id->fakultas}}</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah makanan</b> <a class="pull-right">3 kotak</a>
                </li>
              </ul>
              <button type="submit" class="btn btn-success btn-block">Ambil</button>
            </form>
             

            </div> 
            <!-- /.box-body -->
          </div>

          {{-- <a href="{{route('kupon.show',['id'=> '1'])}}">tes aja dulu</a> --}}
          <!-- /.box -->
    </div>
</div>
{{-- </div> --}}
@endsection

@section('js_datatable')
    <script>
        let barcodeKehadiran = $('#barcode')
        barcodeKehadiran.focus()

        barcodeKehadiran.on('keypress',function(){
            let auto = setTimeout(function () {
                    $('#scan').submit()
                  }, 10);
        })

        document.addEventListener('keydown', function (event) {
              if (event.keyCode == 13 || event.keyCode == 17 || event.keyCode == 74)
                  event.preventDefault();
                
          });
    </script>


@endsection