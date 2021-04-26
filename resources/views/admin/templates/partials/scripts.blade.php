<script src="{{asset('public/assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('public/assets/dist/js/main.js')}}"></script>

@yield('js_datatable')
<script>

@if(session('success'))
    $.notify({
        // options
        message: '{{session('success')}}' 
    },{
        // settings
        type: 'success'
    });
@endif

@if(session('info'))
    $.notify({
        // optionsWW
        message: '{{session('info')}}' 
    },{
        // settings
        type: 'info'
    });
@endif

@if(session('danger'))
    $.notify({
        // options
        message: '{{session('danger')}}' 
    },{
        // settings
        type: 'danger'
    });
@endif

@if(session('warning'))
    $.notify({
        // options
        message: '{{session('warning')}}' 
    },{
        // settings
        type: 'warning'
    });
@endif


</script>

