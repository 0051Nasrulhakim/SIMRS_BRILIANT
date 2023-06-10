$(document).ready(function () {
    $('#list_dokter').DataTable({
        dom: 'Bfrtip',
        paging: true,
        pageLength: 10,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Tous"]],
        order: [[ 0, 'asc' ], [ 1, 'asc' ]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    });
});

function hapus_dokter(id){
    alert(id);
    $.ajax({
        url: "http://localhost:1000/dokter/hapus_dokter",
        type: "POST",
        data: {id:id},
        success: function (data) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Pasien Berhasil Dihapus',
                showConfirmButton: true,
                // timer: 1500
            }).then((result) => {    
                if (result.isConfirmed) {
                    window.location.href = "http://localhost:1000/dokter/list_dokter";
                }
            })
        }
    });
}