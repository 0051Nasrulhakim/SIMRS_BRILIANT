<!-- Tambah Pasien Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModal" aria-hidden="true">
    <form action="<?= base_url()?>/pasien/simpan_pasien" method="post">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="tambahModal">Tambah Pasien</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                <div class="form_add_pasien">
                    <div class="section_one">
                        <div class="mb-3 row">
                            <label for="nomor_bpjs" class="col-sm-4 col-form-label">No BPJS</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="nomor_bpjs" id="nomor_bpjs" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="no_rm" class="col-sm-4 col-form-label">No RM</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="no_rm" id="no_rm" value="<?= $norm?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_pasien" class="col-sm-4 col-form-label">Nama Pasien</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="nik" id="nik" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jaminan_kesehatan" class="col-sm-4 col-form-label">Jam Kes</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="jaminan_kesehatan">
                                    <option value="Umum">UMUM</option>
                                    <option value="BPJS">BPJS</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="alamat" id="alamat" required>
                            </div>
                        </div>
                    </div>
                    <div class="section_two">
                        <div class="mb-3 row">
                            <label for="gol_darah" class="col-sm-4 col-form-label">Gol. Darah</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="gol_darah">
                                    <option value="-">-</option>
                                    <option value="AB">AB</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="status_menikah" class="col-sm-4 col-form-label">Sts. Menikah</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="status_menikah">
                                    <option value="belum menikah">Belum Menikah</option>
                                    <option value="menikah">Menikah</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pendidikan_terakhir" class="col-sm-4 col-form-label">Pendidikan</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="pendidikan_terakhir">
                                    <option value="-">-</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_ibu" class="col-sm-4 col-form-label">Nama ibu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
    </form>
</div>
