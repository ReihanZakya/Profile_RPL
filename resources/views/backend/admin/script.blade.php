<!-- jQuery -->
<script src="{{ asset('/AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/AdminLTE/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('sweetalert@2.1.2/dist/sweetalert.min.js') }}"></script>
<!-- Page specific script -->
@stack('summernote')
@stack('datatables')
@stack('form')
