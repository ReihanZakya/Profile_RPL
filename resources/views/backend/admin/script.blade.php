<!-- jQuery -->
<script src="{{ asset('/AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/AdminLTE/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('sweetalert@2.1.2/dist/sweetalert.min.js') }}"></script>
@stack('datatables')
<script>
    //DataTables
    $(document).ready(function() {
        $('.table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "pageLength": 5,
            "lengthMenu": [5, 10, 15, 20]
        });
    });
</script>
@stack('form')
