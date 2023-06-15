<!-- Tambah Pasien Modal -->
<div class="modal fade" id="lihatDokter" tabindex="-1" aria-labelledby="lihatDokter" aria-hidden="true">
    <form method="post" class="f_update_dokter" id="f_update_dokter" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="lihatDokter" style="text-align: center; width: 100%;">Form Detail Dokter</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                <div class="alert alert-danger" role="alert" id="alert">
                    Silahkan Klik ubah untuk mengedit data Dokter
                </div>
                <div class="form_add_dokter">
                    <div class="section_dokter_one">
                        <div class="mb-3 row">
                            <label for="d_kode_dokter" class="col-sm-4 col-form-label">Kode Dokter</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kode_dokter" id="d_kode_dokter" required disabled>
                                <input type="text" class="form-control" name="id" id="d_id" required hidden>
                                <div id="err_kode_dokter" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="d_nama_dokter" class="col-sm-4 col-form-label">Nama Dokter</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_dokter" id="d_nama_dokter" required disabled>
                                <div id="err_nama_dokter" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="d_spesialis" class="col-sm-4 col-form-label">Spesialis</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="spesialis" id="d_spesialis" required disabled>
                                <div id="err_spesialis" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="d_no_izin_praktek" class="col-sm-4 col-form-label">No Izin Praktek</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="no_izin_praktek" id="d_no_izin_praktek" required disabled>
                                <div id="err_no_izin_praktek" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row pilih_foto" id="pilih_foto" hidden>
                            <label for="nama_foto" class="col-sm-4 col-form-label">Pilih Foto</label>
                            <div class="col-sm-8">
                                <input accept="image/*" type="file" id="d_nama_foto" name="nama_foto"/>
                                <!-- pemberitahuan -->
                                <div class="form-text">*Jika Ingin mengganti gambar silahkan pilih ulang gambar</div>
                            </div>
                        </div>
                    </div>
                    <div class="section_dokter_two">
                        <div class="border">
                            <img clas="preview_img_dokter" id="d_blah" src="#" alt="your image" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btn_tutup" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" id="btn_ubah" onclick="ubah()">Ubah</button>
                <button type="submit" class="btn btn-primary" id="btn_simpan" hidden>Simpan</button>
            </div>
        </div>
    </div>
    </form>
</div>
<script>
    d_nama_foto.onchange = evt => {
        const [file] = d_nama_foto.files
        if (file) {
            d_blah.src = URL.createObjectURL(file)
        }
    }
</script>
