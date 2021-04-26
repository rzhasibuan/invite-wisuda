@extends('admin.templates.default')

@section('content')
        <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$jmlHadir}} <sup style="font-size: 20px">Hadir</sup></h3>

              <p>Buku Tamu</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('tamu.index')}}" class="small-box-footer">Isi buku tamu <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$jmlKupon}}<sup style="font-size: 20px"> Kupon diambil</sup></h3>

              <p>Kupon Makanan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('kupon.index')}}" class="small-box-footer">Pakai kupon <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$jmlEmail}} <sup style="font-size: 20px">Terkirim</sup></h3>

              <p>Email undangan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>  
            <a href="{{url('/admin/email')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$jmlMhs}}<sup style="font-size: 20px"> Peserta</sup></h3>

              <p>Peserta Wisuda</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('mhs.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

    </section>
@endsection