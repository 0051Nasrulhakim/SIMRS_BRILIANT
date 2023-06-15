<!-- Tambah Pasien Modal -->
<div class="modal fade" id="tambahPoli" tabindex="-1" aria-labelledby="tambahPoli" aria-hidden="true">
    <form method="post" class="f_add_poli" id="f_add_dokter">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="tambahPoli" style="text-align: center; width: 100%;">Form Tambah Poli</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                <div class="form_modals">
                    <div class="section_modals_one">
                        <div class="mb-3 row">
                            <label for="kode_poli" class="col-sm-4 col-form-label">Kode Poli</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kode_poli" id="kode_poli" required>
                                <input type="text" class="form-control" name="uid" id="uid" required hidden>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_poli" class="col-sm-4 col-form-label">Nama Poli</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_poli" id="nama_poli" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="mulai_praktek" class="col-sm-4 col-form-label">Mulai Praktek</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mulai_praktek" id="mulai_praktek" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="selesai_praktek" class="col-sm-4 col-form-label">Selesai Praktek</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="selesai_praktek" id="selesai_praktek" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kode_dokter" class="col-sm-4 col-form-label">Kode Dokter</label>
                            <div class="col-sm-8">
                                <!-- <input type="text" id="kode_dokter" name="kode_dokter"/> -->
                                <select class="form-select" name="kode_dokter" id="kode_dokter">
 
                                </select>
                            </div>
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
