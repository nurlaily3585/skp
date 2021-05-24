<!-- <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="div col-lg-6">

        </div>
    </div>
</div> -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <p class="mb-4">Kegiatan Saya menampilkan kegiatan yang saya daftarkan.</p>
    <div class="row">
        <div class="col-sm">
            <a href="#" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Kegiatan Baru</span>
            </a>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <!-- <th>Detil</th> -->
                            <th>Judul Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Jumlah Pendaftar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <!-- <th>Detil</i></th> -->
                            <th>Judul Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Jumlah Pendaftar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kegiatan as $k) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <!-- <td></td> -->
                                <td><?= $k['namakegiatan']; ?></td>
                                <td><?= date('d F Y', $k['tgl_kegiatan']); ?></td>
                                <td><?= $k['pesertaDaftar']; ?></td>
                                <td><?php if ($k['status'] == 0) : ?>
                                        <a href="#" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-flag"></i>
                                            </span>
                                            <span class="text">Diperiksa</span>
                                        </a>
                                    <?php elseif ($k['status'] == 1) : ?>
                                        <a href="#" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-flag"></i>
                                            </span>
                                            <span class="text">Disetujui</span>
                                        </a>
                                    <?php elseif ($k['status'] == 2) : ?>
                                        <a href="#" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-times"></i>
                                            </span>
                                            <span class="text">Ditolak</span>
                                        </a>
                                    <?php elseif ($k['status'] == 3) : ?>
                                        <a href="#" class="btn btn-secondary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-stamp"></i>
                                            </span>
                                            <span class="text">Selesai</span>
                                        </a>
                                    <?php elseif ($k['tgl_kegiatan'] == time()) : ?>
                                        <a href="#" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-running"></i>
                                            </span>
                                            <span class="text">Sedang Berlangsung</span>
                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($k['status'] == 1) : ?>
                                        <a href="#" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-cloud-upload-alt"></i>
                                            </span>
                                            <span class="text">Upload</span>
                                        </a>
                                    <?php elseif ($k['tgl_kegiatan'] == time()) : ?>
                                        <a href="#" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-cloud-upload-alt"></i>
                                            </span>
                                            <span class="text">Upload</span>
                                        </a>
                                    <?php else : ?>
                                        <!-- Tidak melakukan apapun -->
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->