  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{$subDashboard ?? ""}}"><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="{{$subBukuTamu ?? ""}}"><a href="{{route('tamu.index')}}"><i class="fa fa-book"></i> <span>Buku Tamu</span></a></li>
        <li class="{{$subKupon ?? ""}}"><a href="{{route('kupon.index')}}"><i class="fa fa-barcode"></i> <span>kupon</span></a></li>
        <li class="{{$subMhs ?? ""}}"><a href="{{route('mhs.index')}}"><i class="fa fa-graduation-cap"></i> <span>Peserta Wisuda</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>