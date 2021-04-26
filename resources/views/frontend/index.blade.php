<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{asset('public/assets/bower_components/material/css/materialize.min.css')}}" media="screen,projection" />


  <!-- my CSS -->
  {{-- <link rel="stylesheet" href="css/main.css"> --}}
  <link type="text/css" rel="stylesheet" href="{{asset('public/assets/bower_components/material/css/main.css')}}" media="screen,projection" />
   <link rel="icon" type="image/x-icon" href="{{asset('public/assets/dist/img/logo.png')}}">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>SIMADA | UTND</title>
</head>

<body id="home" class="scrollspy">
  <a id="button"></a>

  <!-- navbar -->
  <div class="navbar-fixed">


    <nav class="white darken-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="{{url('/')}}" class="brand-logo center">
            <div class="logotext">UTND</div>
            <img src="{{asset('public/assets/bower_components/material/img/slider/logo.png')}}" alt="" height="65px" class="logo">
          </a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">


          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav -->

  <ul class="sidenav" id="mobile-nav">
    <li><a href="#npm">Masukkan npm</a></li>
    <li><a href="#bantuan">Bantuan</a></li>


  </ul>


  <!-- konten pencarian mhs-->
  <section class="konten-pencarian">
    <div class="container">

      <!-- gambar -->
      <div class="row">
        <div class="col m12 s12">
          <img src="{{asset('public/assets/dist/img/wisuda.jpg')}}" alt="" width="100%" height="300px" class="z-depth-2">
        </div>
      </div>

      <!-- lebel informasi -->
      <div class="row">
        <div class="col m12 s12">
          <h5 class="light grey-text text-darken-3 center-align judul ">Selamat datang di simada <br>(Sistem
            Informasi
            Wisuda
            Universitas Tjut Nyak Dhien)</h5>
        </div>
      </div>

      <!-- konten informasi -->
      <div class="row">
        <div class="col m5 s12 scrollspy" id="bantuan">


          <ul class="collapsible">
            <li>
              <div class="collapsible-header"><i class="material-icons">lightbulb_outline</i><b>Apa itu simada</b></div>
              <div class="collapsible-body"><span>SIMADA adalah sistem informasi wisuda.</span></div>
            </li>

            <li>
              <div class="collapsible-header"><i class="material-icons">smartphone</i><b>Cara mengunakan simada</b>
              </div>
              <div class="collapsible-body"><span>1. Masukkan NPM untuk mengecek apakah mahasiswa sudah bisa mengikuti wisuda ataukah tidak. <br>
              2. Jika data mahasiswa ditemukan berarti mahasiswa tersebut berhak mengikuti wisuda pada waktu yang telah di tentukan. <br>
            3. Mahasiswa wajibkan konfirmasi alamat email agar sistem dapat mengirimkan data berupa undangan untuk mahasiswa yang berhak mengikuti wisuda.</span></div>
            </li>

            <li>
              <div class="collapsible-header"><i class="material-icons">speaker_notes</i><b>Pusat Bantuan</b></div>
              <div class="collapsible-body"><span>Pusat bantuan bisa hubungin kami melalui WhatsApp <a href="https://wa.me/6282329396631?text=Assalammu'alaikum%20pusat%20sistem%20informasi%20UTND" class="btn-small green darken-4">Klik disini</a></span></div>
            </li>

          </ul>
        </div>

        <div class="col m7 s12 scrollspy" id="npm">
          <form action="{{url('/wisuda/cari')}}" method="GET">
            <div class="card-panel">
              <div class="input-field">
                  {{-- @csrf --}}
                <input type="text" name="cari" id="cari" required class="validate">
                <label for="cari">Masukkan NPM</label>

  
              </div>

              <button type="submit" class="btn orange darken-4">Cari</button>
            </div>
          </form>
        </div>

        <div class="col m12 s12">

          @if(session('success'))
            <div class="not-valid z-depth-2" id="success">
              <small>{{session('success')}}</small>
            </div>
          @endif
          <!-- not valld -->
          <!-- sukses -->
          @if($mhs->count() == 1)
         <div class="not-valid z-depth-2" id="success">
            <small>Kami menemukan data yang anda cari, tak perlu berterima kasih itu sudah kewajiban kami</small>
          </div>
          @foreach ($mhs as $dt)
           <div class="data-mhs" id="valid">
            <h5><i class="material-icons">info</i> Data mahasiswa wisuda 2020</h5>
            <div class="table-mhs z-depth-2">
              <table>
                <thead>
                  <th>Selamat Kepada</th>
                  <th>:</th>
                  <th>{{$dt->nama}}</th>
                </thead>
                <thead>
                  <th>Jurusan</th>
                  <th>:</th>
                  <th>{{$dt->prodi}}</th>
                </thead>
                <thead>
                  <th>Fakultas</th>
                  <th>:</th>
                  <th>{{$dt->fakultas}}</th>
                </thead>
                <thead>
                  <th>Tanggal wisuda </th>
                  <th>:</th>
                  <th>4 April 2020</th>
                </thead>
                <thead>
                  <th>Lokasi</th>
                  <th>:</th>
                  <th>Universitas Tjut Nyak Dhien</th>
                </thead>
                <thead>
                  <th colspan="3">Selamat anda berhak mengikuti wisuda tahun 2020 silahkan konfirmasi email anda agar kami segera dapat mengirimkan barcode undangan kepada anda</th>
                </thead>
              </table>
            </div>

            <button id="unduh" class="btn orange darken-4 waves-effect waves-light" style="margin-top: 10px;">
               KONFIRMASI</button>

            <form action="{{url('/undagan-kami')}}" method="POST">
                @csrf
             <div class="card-panel konfirmasi-email">
                <div class="input-field">
                  <input type="hidden" name="id" value="{{$dt->id}}">
                  <input type="email" name="email" id="email" required class="validate">
                  <label for="email">Masukkan email</label>
                </div>

                <button type="submit" class="btn orange darken-4" id="btn-konfir">KONFIRMASI</button>
              </div>
            </form>
          </div>
          @endforeach
          @endif


          @if($mhs->isEmpty())
         <div class="not-valid z-depth-2" id="invalid">
            <small>mohon maaf kami tidak bisa menumukan data yang anda cari, silahkan cek kembali</small>
          </div>
          @endif


        </div>


      </div>
    </div>
  </section>

  <!-- end konten -->
  <!-- footer -->
  <footer class="grey darken-2 white-text center">
    <p class="flow-text">&copy; Pusat Sistem informasi - Universitas Tjut Nyak Dhien .All rights reserved.</p>
  </footer>



  <!--JavaScript at end of body for optimized loading-->
<script src="{{asset('public/assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/bower_components/material/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('public/assets/bower_components/material/js/materialize.min.js')}}"></script>
<script src="{{asset('public/assets/bower_components/material/js/interaksi.js')}}"></script>

<script>
// let invalid = $('#invalid').hide()
let valid = $('#success').css('color','green')
let npmClass = $('#npm')

@if(session('success'))
    M.toast({
        html: '{{session('success')}}',
        inDuration: 300,
        outDuration: 900
    })
@endif

</script>
</body>

</html>