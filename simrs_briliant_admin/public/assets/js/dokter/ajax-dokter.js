$(document).ready(function () {
    $('#list_dokter').DataTable({
        dom: 'Bfrtip',
        paging: true,
        pageLength: 10,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Tous"]],
        order: [[ 0, 'asc' ], [ 1, 'asc' ]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    });

    $('#lihatDokter').on('hidden.bs.modal', function () {
        $('#alert').text('Tekan Tombol Ubah Untuk Mengubah Data Dokter');
        $('#alert').removeClass('alert-success');
        $('#alert').addClass('alert-danger');

        $('#d_kode_dokter').attr('disabled', true);
        $('#d_id').attr('disabled', true);
        $('#d_nama_dokter').attr('disabled', true);
        $('#d_spesialis').attr('disabled', true);
        $('#d_no_izin_praktek').attr('disabled', true);
        $('#d_blah').attr('src', 'http://localhost:1000/assets/img/dokter/'+data.nama_foto);
        // hapus foto
    });

    $('#tambahDokter').on('hidden.bs.modal', function () {
        $('#blah').attr('src', 'http://localhost:1000/assets/img/default.png');
        $('#nama_foto').val('');
    });
});

function hapus_dokter(id){
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

function lihat_dokter(id){
    $.ajax({
        url: "http://localhost:1000/dokter/lihat_dokter",
        type: "POST",
        data: {id:id},
        success: function (data) {
            var data = JSON.parse(data);
            $('#lihatDokter').modal('show');
            $('#d_id').val(data.id);
            $('#d_kode_dokter').val(data.kode_dokter);
            $('#d_nama_dokter').val(data.nama_dokter);
            $('#d_spesialis').val(data.spesialis);
            $('#d_no_izin_praktek').val(data.no_izin_praktek);
            if(data.nama_foto == null){
                $('#d_blah').attr('src', 'http://localhost:1000/assets/img/default.png');
            }else{
                $('#d_blah').attr('src', 'http://localhost:1000/assets/img/dokter/'+data.nama_foto);
            }
        }
    });
}

function ubah(){
    $('#alert').text('Silahkan Ubah Data Dokter');
    $('#alert').removeClass('alert-danger');
    $('#alert').addClass('alert-success');

    $('#d_kode_dokter').attr('disabled', false);
    $('#d_nama_dokter').attr('disabled', false);
    $('#d_spesialis').attr('disabled', false);
    $('#d_no_izin_praktek').attr('disabled', false);
    $('#pilih_foto').attr('hidden', false);
    $('#btn_ubah').attr('hidden', false);
    $('#btn_tutup').text('Batal');

}