$(document).ready(function(){
    $('#update_form').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: "http://localhost:1000/pasien/update_pasien",
            type: 'post',
            data: $('#update_form').serialize(),
            success: function(respon){
                var data = JSON.parse(respon);
                if(data.status != 200){
                    // tampilkan data.message
                    for (var key in data.message) {
                        if (data.message.hasOwnProperty(key)) {
                            $('#err_'+key).attr('hidden', false).text(' *'+data.message[key]);
                        }
                    }
                }
                if(data.status == 'success'){
                    $('#detailPasien').modal('hide', function(){
                        
                    });
                    // alert dengan sweetalert
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Pasien Berhasil Diubah',
                        showConfirmButton: true,
                        // timer: 1500
                    }).then((result) => {    
                        if (result.isConfirmed) {
                            window.location.href = "http://localhost:1000/pasien/list_pasien";
                        }
                    })
                }
            }
        })
    })
})

