<!-- Tambah Pasien Modal -->
<div class="modal fade" id="tambahDokter" tabindex="-1" aria-labelledby="tambahDokter" aria-hidden="true">
    <form action="<?= base_url()?>dokter/simpan_dokter" method="post" class="f_add_dokter" id="f_add_dokter" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="tambahDokter" style="text-align: center; width: 100%;">Form Tambah Dokter</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                <div class="form_add_dokter">
                    <div class="section_dokter_one">
                        <div class="mb-3 row">
                            <label for="kode_dokter" class="col-sm-4 col-form-label">Kode Dokter</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kode_dokter" id="kode_dokter" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_dokter" class="col-sm-4 col-form-label">Nama Dokter</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_dokter" id="nama_dokter" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="spesialis" class="col-sm-4 col-form-label">Spesialis</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="spesialis" id="spesialis" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="no_izin_praktek" class="col-sm-4 col-form-label">No Izin Praktek</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="no_izin_praktek" id="no_izin_praktek" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_foto" class="col-sm-4 col-form-label">Pilih Foto</label>
                            <div class="col-sm-8">
                                <input accept="image/*" type="file" id="nama_foto" name="nama_foto"/>
                                <!-- pemberitahuan -->
                                <div class="form-text">*Jika Ingin mengganti gambar silahkan pilih ulang gambar</div>
                            </div>
                        </div>
                    </div>
                    <div class="section_dokter_two">
                        <div class="border">
                            <img clas="preview_img_dokter" id="blah" src="<?= base_url()?>/assets/img/default.png" alt="your image" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
    </form>
</div>
<script>
    nama_foto.onchange = evt => {
        const [file] = nama_foto.files
        if (file) {
            blah.src = URL.createObjectURL(file)
            console.log(blah.src);
        }
    }
</script>
