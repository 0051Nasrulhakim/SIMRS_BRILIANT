// ajax get data pasien

$(document).ready(function () {
    $('#example').DataTable({
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
    // reset jika modal tertutup
    $('#detailPasien').on('hidden.bs.modal', function () {
        $('#alert').text('Tekan Tombol Ubah Untuk Mengubah Data Pasien');
        $('#judul').text('Ubah Pasien');
        $('#alert').removeClass('alert-success');
        $('#alert').addClass('alert-danger');
        // get elemen by class pesan_error
        $('.pesan_error').attr('hidden', true).text('');

        $('#d_nomor_bpjs').attr('disabled', true);
        $('#d_no_rm').attr('disabled', true);
        $('#d_nama_pasien').attr('disabled', true);
        $('#d_nik').attr('disabled', true);
        $('#d_jaminan_kesehatan').attr('disabled', true);
        $('#d_tempat_lahir').attr('disabled', true);
        $('#d_tanggal_lahir').attr('disabled', true);
        $('#d_alamat').attr('disabled', true);
        $('#d_gol_darah').attr('disabled', true);
        $('#d_pekerjaan').attr('disabled', true);
        $('#d_status_menikah').attr('disabled', true);
        $('#d_agama').attr('disabled', true);
        $('#d_pendidikan_terakhir').attr('disabled', true);
        $('#d_nama_ibu').attr('disabled', true);
        $('#d_nama_ayah').attr('disabled', true);

        $('#btn_simpan').attr('hidden', true);
        $('#btn_tutup').text('Tutup');
        $('#btn_ubah').removeAttr('hidden');
    });
    
});

function lihat_pasien(uid){
    $.ajax({
        url: "http://localhost:1000/pasien/lihat_pasien",
        type: "POST",
        data: {uid:uid},
        success: function (data) {
            $('#detailPasien').modal('show');
            // get data
            var data = JSON.parse(data);
            $('#d_uid').val(data.uid);
            $('#d_no_rm').val(data.no_rm);
            $('#d_nomor_bpjs').val(data.no_bpjs);
            $('#d_nama_pasien').val(data.nama_pasien);
            $('#d_nik').val(data.nik);
            $('#d_jaminan_kesehatan').val(data.jaminan_kesehatan);
            $('#d_tempat_lahir').val(data.tempat_lahir);
            $('#d_tanggal_lahir').val(data.tanggal_lahir);
            $('#d_alamat').val(data.alamat);
            $('#d_gol_darah').val(data.gol_darah);
            $('#d_pekerjaan').val(data.pekerjaan);
            $('#d_status_menikah').val(data.status_menikah);
            $('#d_agama').val(data.agama);
            $('#d_pendidikan_terakhir').val(data.pendidikan_terakhir);
            $('#d_nama_ibu').val(data.nama_ibu);
            $('#d_nama_ayah').val(data.nama_ayah);
        }
    });
}

function ubah_pasien(uid){
    $.ajax({
        url: "http://localhost:1000/pasien/lihat_pasien",
        type: "POST",
        data: {uid:uid},
        success: function (data) {
            $('#detailPasien').modal('show');
            // get data
            var data = JSON.parse(data);
            $('#d_uid').val(data.uid);
            $('#d_no_rm').val(data.no_rm);
            $('#d_nomor_bpjs').val(data.no_bpjs);
            $('#d_nama_pasien').val(data.nama_pasien);
            $('#d_nik').val(data.nik);
            $('#d_jaminan_kesehatan').val(data.jaminan_kesehatan);
            $('#d_tempat_lahir').val(data.tempat_lahir);
            $('#d_tanggal_lahir').val(data.tanggal_lahir);
            $('#d_alamat').val(data.alamat);
            $('#d_gol_darah').val(data.gol_darah);
            $('#d_pekerjaan').val(data.pekerjaan);
            $('#d_status_menikah').val(data.status_menikah);
            $('#d_agama').val(data.agama);
            $('#d_pendidikan_terakhir').val(data.pendidikan_terakhir);
            $('#d_nama_ibu').val(data.nama_ibu);
            $('#d_nama_ayah').val(data.nama_ayah);

            $('#alert').text('Silahkan ubah data pasien');
            $('#judul').text('Ubah Pasien');
            // rubah warna alert
            $('#alert').removeClass('alert-danger');
            $('#alert').addClass('alert-success');
            $('#btn_simpan').removeAttr('hidden');
            $('#btn_tutup').text('Batalkan');
            $('#btn_ubah').attr('hidden', true);
            $('#d_nomor_bpjs').removeAttr('disabled');
            $('#d_no_rm').removeAttr('disabled');
            $('#d_nama_pasien').removeAttr('disabled');
            $('#d_nik').removeAttr('disabled');
            $('#d_jaminan_kesehatan').removeAttr('disabled');
            $('#d_tempat_lahir').removeAttr('disabled');
            $('#d_tanggal_lahir').removeAttr('disabled');
            $('#d_alamat').removeAttr('disabled');
            $('#d_gol_darah').removeAttr('disabled');
            $('#d_pekerjaan').removeAttr('disabled');
            $('#d_status_menikah').removeAttr('disabled');
            $('#d_agama').removeAttr('disabled');
            $('#d_pendidikan_terakhir').removeAttr('disabled');
            $('#d_nama_ibu').removeAttr('disabled');
            $('#d_nama_ayah').removeAttr('disabled');
        }
    });
}

function ubah(){
    // rubah text alert
    $('#alert').text('Silahkan ubah data pasien');
    $('#judul').text('Ubah Pasien');
    // rubah warna alert
    $('#alert').removeClass('alert-danger');
    $('#alert').addClass('alert-success');
    $('#btn_simpan').removeAttr('hidden');
    $('#btn_tutup').text('Batalkan');
    $('#btn_ubah').attr('hidden', true);
    $('#d_nomor_bpjs').removeAttr('disabled');
    $('#d_no_rm').removeAttr('disabled');
    $('#d_nama_pasien').removeAttr('disabled');
    $('#d_nik').removeAttr('disabled');
    $('#d_jaminan_kesehatan').removeAttr('disabled');
    $('#d_tempat_lahir').removeAttr('disabled');
    $('#d_tanggal_lahir').removeAttr('disabled');
    $('#d_alamat').removeAttr('disabled');
    $('#d_gol_darah').removeAttr('disabled');
    $('#d_pekerjaan').removeAttr('disabled');
    $('#d_status_menikah').removeAttr('disabled');
    $('#d_agama').removeAttr('disabled');
    $('#d_pendidikan_terakhir').removeAttr('disabled');
    $('#d_nama_ibu').removeAttr('disabled');
    $('#d_nama_ayah').removeAttr('disabled');
}

function hapus_pasien(uid){
    // alert(uid);
    $.ajax({
        url: "http://localhost:1000/pasien/hapus_pasien",
        type: "POST",
        data: {uid:uid},
        success: function (data) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Pasien Berhasil Dihapus',
                showConfirmButton: true,
                // timer: 1500
            }).then((result) => {    
                if (result.isConfirmed) {
                    window.location.href = "http://localhost:1000/pasien/list_pasien";
                }
            })
        }
    });
}



