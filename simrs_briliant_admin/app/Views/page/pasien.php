<?= $this->include('template/header') ?>
<?= $this->include('template/sidebar') ?>

    <div class="content">
        <div class="judul">
            <h4>Daftar Pasien</h4>
        </div>
        <div class="alert alert-success alert-dismissible fade show" id="alert_berhasil_ubah" role="alert" hidden>
            <strong>Data Pasien Berhasil Di Ubah</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="button" style="margin-left: 1%;">
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Pasien</button>
        </div>
        <div class="table" style="margin-bottom: 2%;">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 5%; text-align: center;">No</th>
                        <th style="width: 20%;">NO Bpjs</th>
                        <th style="width: 20%;">No RM</th>
                        <th>Nama Pasien</th>
                        <th style="width: 20%; text-align:center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ;foreach($data as $pasien):?>
                    <tr>
                        <td style="text-align: center;"><?= $i++?></td>
                        <td><?= $pasien['no_bpjs']?></td>
                        <td><?= $pasien['no_rm']?></td>
                        <td><?= $pasien['nama_pasien']?></td>
                        <td style="text-align: center">
                            <button class="btn btn-info btn-sm" id="lihat_pasien" onclick="lihat_pasien(<?= $pasien['uid']?>)">Lihat</button>
                            <button class="btn btn-warning btn-sm" onclick="ubah_pasien(<?= $pasien['uid']?>)">Ubah</button>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')
                            ? hapus_pasien(<?= $pasien['uid']?>) : false">Hapus</button>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>


    <?= $this->include('modals/modals_add_pasien') ?>
    <?= $this->include('modals/modals_lihat_pasien') ?>

    <script src="<?= base_url()?>assets/js/ajax_lihat-pasien.js"></script>
<?= $this->include('template/footer') ?>