<?= $this->include('template/header') ?>
<?= $this->include('template/sidebar') ?>

    <div class="content">
        <div class="judul">
            <h4>Daftar Dokter Pasien</h4>
        </div>
        
        <div class="button" style="margin-left: 1%;">
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDokter">Tambah Dokter</button>
        </div>

        <div class="table" style="margin-bottom: 2%;">
            <table id="list_dokter" class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 5%; text-align: center;">No</th>
                        <th style="width: 12%;">Kode Dokter</th>
                        <th style="width: 25%;">Nama Dokter</th>
                        <th style="width: 20%;">No Ijin Praktek</th>
                        <th style="width: 20%; text-align:center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ;foreach($data as $dokter):?>
                    <tr>
                        <td style="text-align: center;"><?= $i++?></td>
                        <td><?= $dokter['kode_dokter']?></td>
                        <td><?= $dokter['nama_dokter']?></td>
                        <td><?= $dokter['no_izin_praktek']?></td>
                        <td style="text-align: center;">
                            <button class="btn btn-info btn-sm" id="lihat_dokter" onclick="lihat_dokter(<?= $dokter['id']?>)">Lihat</button>
                            <button class="btn btn-warning btn-sm" onclick="ubah_dokter(<?= $dokter['id']?>)">Ubah</button>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')
                            ? hapus_dokter(<?= $dokter['id']?>) : false">Hapus</button>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            var session = '<?= session()->getFlashdata('s_add_dokter')?>';
            if(session){
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: session,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        <?= session()->remove('s_add_dokter')?>
                    }
                })
            }
        });
    </script>              
    <?= $this->include('modals/modals_dokter/modals_add_dokter') ?>
    <?= $this->include('modals/modals_dokter/modals_lihat_dokter') ?>
    <script src="<?= base_url()?>assets/js/dokter/ajax-dokter.js"></script>
<?= $this->include('template/footer') ?>