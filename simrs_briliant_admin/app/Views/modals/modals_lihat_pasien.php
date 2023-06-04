<!-- Tambah Pasien Modal -->
<div class="modal fade" id="detailPasien" tabindex="-1" aria-labelledby="detailPasien" aria-hidden="true">
    <form id="update_form">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5 text-center" style="width: 100%;" id="judul">Detail Pasien</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert" id="alert">
                    Silahkan Klik ubah untuk mengedit data pasien
                </div>
                <div class="form_add_pasien">
                    <div class="section_one">
                        <div class="mb-3 row">
                            <label for="nomor_bpjs" class="col-sm-4 col-form-label">No BPJS</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="nomor_bpjs" id="d_nomor_bpjs" required disabled>
                                <input type="number" class="form-control" name="uid" id="d_uid" hidden required >
                                <div id="err_no_bpjs" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="no_rm" class="col-sm-4 col-form-label">No RM</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="no_rm" id="d_no_rm" required disabled>
                                <div id="err_no_rm" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_pasien" class="col-sm-4 col-form-label">Nama Pasien</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_pasien" id="d_nama_pasien" required disabled>
                                <div id="err_nama_pasien" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="nik" id="d_nik" required disabled>
                                <div id="err_nik" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jaminan_kesehatan" class="col-sm-4 col-form-label">Jam Kes</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="jaminan_kesehatan" id="d_jaminan_kesehatan" disabled>
                                    <option value="Umum">UMUM</option>
                                    <option value="BPJS">BPJS</option>
                                </select>
                                <div id="err_jaminan_kesehatan" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tempat_lahir" id="d_tempat_lahir" required disabled>
                                <div id="err_tempat_lahir" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_lahir" id="d_tanggal_lahir" required disabled>
                                <div id="err_tanggal_lahir" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="alamat" id="d_alamat" required disabled>
                                <div id="err_alamat" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                    </div>
                    <div class="section_two">
                        <div class="mb-3 row">
                            <label for="gol_darah" class="col-sm-4 col-form-label">Gol. Darah</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="gol_darah" id="d_gol_darah" disabled>
                                    <option value="-">-</option>
                                    <option value="AB">AB</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                </select>
                                <div id="err_gol_darah" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pekerjaan" id="d_pekerjaan" required disabled>
                                <div id="err_pekerjaan" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="status_menikah" class="col-sm-4 col-form-label">Sts. Menikah</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="status_menikah" id="d_status_menikah" disabled>
                                    <option value="belum menikah">Belum Menikah</option>
                                    <option value="menikah">Menikah</option>
                                </select>
                                <div id="err_status_menikah" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="agama" id="d_agama" disabled>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                <div id="err_agama" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pendidikan_terakhir" class="col-sm-4 col-form-label">Pendidikan</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="pendidikan_terakhir" id="d_pendidikan_terakhir" disabled>
                                    <option value="-">-</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                                <div id="err_pendidikan_terakhir" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="d_nama_ayah" class="col-sm-4 col-form-label">Nama ibu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_ibu" id="d_nama_ibu" required disabled>
                                <div id="err_nama_ibu" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="d_nama_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_ayah" id="d_nama_ayah" required disabled>
                                <div id="err_nama_ayah" class="form-text text-danger pesan_error" hidden></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_tutup">Tutup</button>
                <button type="button" class="btn btn-warning" onclick="ubah()" id="btn_ubah">Ubah</button>
                <button type="submit" class="btn btn-primary" id="btn_simpan" hidden>Simpan Perubahan</button>
            </div>
        </div>
    </div>
    </form>
    <!-- submit dengan ajax jika status code tidak 200 tetap buka modal-->
    <script src="<?= base_url()?>assets/js/ajax_update-pasien.js"></script>
    
    
</div>
