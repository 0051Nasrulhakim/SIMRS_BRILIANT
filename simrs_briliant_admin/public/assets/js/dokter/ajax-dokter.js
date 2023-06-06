$(document).ready(function () {
    $('#list_dokter').DataTable({
        dom: 'Bfrtip',
        paging: true,
        pageLength: 10,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Tous"]],
        order: [[ 0, 'asc' ], [ 1, 'asc' ]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        // cek apakah ada perubahan data
        // drawCallback: function () {
        //     console.log('Data Table has redrawn');
        // }
    });
});