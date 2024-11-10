$(document).ready(function() {
    $('#table').DataTable({
        "responsive": true,
        "autoWidth": false,
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "lengthChange": true,
        "pageLength": 10
    });
});