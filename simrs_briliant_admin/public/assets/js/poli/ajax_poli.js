// document
$(document).ready(function () {
    $('#poli').DataTable({
        dom: 'Bfrtip',
        paging: true,
        pageLength: 10,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Tous"]],
        order: [[ 0, 'asc' ], [ 1, 'asc' ]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    });
    $('#').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: "",
            type: "",
            success: function(respon){
            }
        })
    })

});

function open_modal_add(){
    $.ajax({
        url: "http://localhost:1000/poli/get_kodeDokter",
        type: "POST",
        success: function(respon){
            $('#tambahPoli').modal('show');
            
            var data = JSON.parse(respon);
            // append ke select option
            $('#kode_dokter').empty();
            $('#kode_dokter').append('<option value="">-- Pilih Dokter --</option>');
            console.log(data.data);
            $.each(data.data, function(key, value){
                $('#kode_dokter').append('<option value="'+value.kode_dokter+'">'+value.kode_dokter+ ' - ' +value.nama_dokter+'</option>');
            }
            );
        }
    });
}