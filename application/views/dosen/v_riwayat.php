<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <p class="mb-4">Riwayat Kegiatan menampilkan daftar riwayat kegiatan yang pernah di ikuti.</p>

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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <!-- <th>Detil</i></th> -->
                            <th>Judul Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $peserta = $user['email'];
                        $sertifikat = "SELECT *
                         FROM `tb_kegiatan` JOIN `tb_peserta` 
                         ON `tb_kegiatan`.`id_kegiatan` = `tb_peserta`.`id_kegiatan`
                         WHERE `tb_peserta`.`email_peserta`='$peserta'
                         AND `tb_kegiatan`.`status`=3
                          ";
                        $kegiatan = $this->db->query($sertifikat)->result_array();
                        ?>
                        <?php foreach ($kegiatan as $k) : ?>
                            <?php $i = 1; ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $peserta; ?></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-award"></i>
                                        </span>
                                        <span class="text">Sertifikat</span>
                                    </a>
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