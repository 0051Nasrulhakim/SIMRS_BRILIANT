<?= $this->include('template/header') ?>
<?= $this->include('template/sidebar') ?>
    <div class="content">
        <div class="judul">
            <h4>Daftar Poli</h4>
        </div>
        <div class="button" style="margin-left: 1%;">
            <button class="btn btn-sm btn-primary" onclick="open_modal_add()">Tambah Poli</button>
        </div>
        <div class="table" style="margin-bottom: 2%;">
            <table id="poli" class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 3%; text-align: center;">No</th>
                        <!-- <th style="width: 10%; text-align: center;">Kode</th> -->
                        <th style="width: 13%; text-align: center;">Nama - kode Poli</th>
                        <th style="width: 10%;">Hari</th>
                        <th style="width: 17%;">Waktu Praktek</th>
                        <th style="text-align: center;">Dokter</th>
                        <th style="width: 20%; text-align:center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ;foreach($data as $poli):?>
                    <tr>
                        <td style="text-align: center;"><?= $i?></td>
                        <td><?= $poli['nama_poli']?> - <?= $poli['kode_poli']?></td>
                        <td>Minggu</td>
                        <td><?= $poli['mulai_praktek']. " - "  . $poli['selesai_praktek']?></td>
                        <td style="text-align: center;"><?= $poli['nama_dokter']?></td>
                        <td style="text-align: center;">
                            <button class="btn btn-info btn-sm" id="lihat_pasien">Lihat</button>
                            <button class="btn btn-warning btn-sm" >Ubah</button>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')
                            ? hapus_poli(<?= $poli['uid']?>) : false">Hapus</button>
                        </td>
                    </tr>
                    <?php $i++; endforeach;?>
                </tbody>
            </table>
        </div>
    </div>


    <?= $this->include('modals/modals_poli/add_poli') ?>
    <script src="<?= base_url()?>assets/js/poli/ajax_poli.js"></script>
<?= $this->include('template/footer') ?>