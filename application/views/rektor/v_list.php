<!-- <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="div col-lg-6">

        </div>
    </div>
</div> -->


<script type="text/javascript" src="jquery_v_list.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <p class="mb-4">Daftar Kegiatan menampilkan semua kegiatan yang akan, sedang, dan telah berlangsung.</p>

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
                            <th>Biaya Pendaftaran</th>
                            <th>Batas Pendaftaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <!-- <th>Detil</th> -->
                            <th>Judul Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Biaya Pendaftaran</th>
                            <th>Batas Pendaftaran</th>
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
                                <td><?= $k['pendaftaranPeserta']; ?></td>
                                <td><?= date('d F Y', $k['tgl_tutup']); ?></td>
                                <td>
                                    <?php if ($k['status'] == 1) : ?>
                                        <a href="<?= base_url('rektor/v_ikuti'); ?>" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Ikuti</span>
                                        </a>
                                    <?php elseif ($k['tgl_kegiatan'] == time()) : ?>
                                        <a href="<?= base_url('rektor/v_ikuti/'); ?><?= $k['id_kegiatan']; ?>" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Ikuti</span>
                                        </a>
                                    <?php else : ?>
                                        <!-- Tidak melakukan apa apa -->
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