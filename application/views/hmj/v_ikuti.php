<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <p class="mb-4">Informasi detail kegiatan.</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="container">
                <?php foreach ($kegiatan as $k) : ?>
                    <div class="row">
                        <div class="col-3">
                            Brosur
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            Gambarnya Brosur
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Judul Kegiatan
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            2 of 3 (wider)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Detail Kegiatan
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            2 of 3 (wider)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Penyelenggara
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            2 of 3 (wider)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Kategori
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            2 of 3 (wider)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Tingkat
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            2 of 3 (wider)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Biaya Pendaftaran
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            2 of 3 (wider)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Tanggal Pelaksanaan Kegiatan
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            2 of 3 (wider)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Tanggal Pendaftaran Buka
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            2 of 3 (wider)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Tanggal Pendaftaran Tutup
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            2 of 3 (wider)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Contact Person
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            2 of 3 (wider)
                        </div>
                    </div>






                <?php endforeach; ?>
            </div>
        </div>













        <div class="mb-3">
            <a href="<?= base_url('hmj/mendaftar'); ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check-double"></i>
                </span>
                <span class="text">Saya Mendaftar</span>
            </a>
        </div>
    </div>
</div>