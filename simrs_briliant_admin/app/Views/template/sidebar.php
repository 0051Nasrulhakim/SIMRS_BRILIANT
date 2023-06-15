<div class="navbar">
            <div class="content">
                <div class="logo">
                    SIMRS BRiliant
                </div>
                <div class="jam">
                    <div class="jam-digital">
                        <div class="hari"><?= $hari = nama_hari(date("D"))?></div>
                        <div class="digital" id="jam"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="sidebar">
                <div class="appname">
                    APP ADMIN
                </div>
                <div class="content">
                    <ul>
                        <li><a href="<?= base_url('') ?>">Dashboard</a></li>
                        <li><a href="<?= base_url('pasien/list_pasien') ?>">Pasien</a></li>
                        <li><a href="<?= base_url('dokter/list_dokter') ?>">Dokter</a></li>
                        <li><a href="<?= base_url('poli/list_poli') ?>">Poli</a></li>
                    </ul>
                </div>
            </div>
            <div class="section">
                <div class="breadcum">
                    <!-- breadcum -->
                    <div class="background">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>

                                <div class="user" style="margin-left: auto;">
                                    User : admin
                                </div>
                            </ol>
                        </nav>
                    </div>
                </div>