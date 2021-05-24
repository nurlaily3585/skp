        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row">
                <div class="col-md-5">
                    <!-- <?= form_error('name', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
                    <!-- <?= form_error('detail', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
                    <!-- <?= form_error('penyelenggara', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
                    <!-- <?= form_error('kategori', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
                    <!-- <?= form_error('tgl_kegiatan', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
                    <!-- <?= form_error('tgl_buka', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
                    <!-- <?= form_error('tgl_tutup', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
                    <!-- <?= form_error('batasPeserta', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
                    <!-- <?= form_error('pendaftaranPeserta', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
                </div>
            </div>


            <div class="card shadow mb-4">
                <div class="card-body">
                    <?= form_open_multipart('Hmj/daftarKegiatan'); ?>
                    <!-- <form method="POST" action="<?= base_url('Hmj/daftarKegiatan'); ?>"> -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="1-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="1" aria-selected="true">Detail Kegiatan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="2-tab" data-toggle="tab" href="#pendanaan" role="tab" aria-controls="2" aria-selected="false">Pendanaan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="3-tab" data-toggle="tab" href="#jawab" role="tab" aria-controls="3" aria-selected="false">Pertanggungan Jawab</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="4-tab" data-toggle="tab" href="#penanggung" role="tab" aria-controls="4" aria-selected="false">Penanggung Jawab</a>
                        </li>
                    </ul>
                    <!-- Tab Pertama -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="1-tab">
                            <br><br>
                            <div class="row form-floating mb-3">
                                <div class="mb-3 col-md-10">
                                    <label for="judulKegiatan" class="form-label">Judul Kegiatan :</label>
                                    <input type="text" class="form-control" id="name" name="name" data-toggle="tooltip" title="Judul Acara harus menarik">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-10">
                                    <label for="detail" class="form-label">Detail Kegiatan :</label>
                                    <textarea type="text" class="form-control" id="detail" name="detail" data-toggle="tooltip" title="Deskripsikan Acara Anda dengan detail agar menarik banyak peserta !"></textarea>
                                    <?= form_error('detail', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="penyelenggara" class="form-label">Penyelenggara :</label><br>
                                    <select class="form-select" aria-label="penyelenggara" name="penyelenggara">
                                        <option selected>-- Pilih Penyelenggara --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <?= form_error('penyelenggara', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="kategori" class="form-label">Kategori :</label><br>
                                    <select class="form-select" aria-label="kategori" name="kategori">
                                        <option selected>-- Pilih Kategori --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="tgl_kegiatanLabel" class="form-label">Tanggal Acara Kegiatan :</label>
                                    <input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" placeholder="" data-toggle="tooltip" title="Pemilihan tanggal acara akan menentukan banyaknya respon peserta kegiatan !">
                                    <?= form_error('tgl_kegiatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="tgl_bukaLabel" class="form-label">Tanggal Dibuka Pendaftaran :</label>
                                    <input type="date" class="form-control" id="tgl_buka" name="tgl_buka" placeholder="" data-toggle="tooltip" title="Tanggal pembukaan pendaftaran sebaiknya minimal 1 minggu sebelum tanggal acara berlangsung !">
                                    <?= form_error('tgl_buka', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="tgl_tutupLabel" class="form-label">Tanggal Penutupan Pendaftaran :</label>
                                    <input type="date" class="form-control" id="tgl_tutup" name="tgl_tutup" placeholder="" data-toggle="tooltip" title="Tanggal penutupan pendaftaran sebaiknya sebelum tanggal acara !">
                                    <?= form_error('tgl_tutup', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Batas Peserta :</label>
                                    <input type="text" class="form-control" id="batasPeserta" name="batasPeserta" data-toggle="tooltip" title="Tentukan Jumlah Peserta" placeholder="">
                                    <?= form_error('batasPeserta', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Biaya Pendaftaran Peserta :</label>
                                    <input type="text" class="form-control" id="pendaftaranPeserta" name="pendaftaranPeserta" placeholder="Rp." data-toggle="tooltip" title="Tentukan Biaya Pendaftaran untuk Tiap Peserta dalam Rupiah">
                                    <?= form_error('pendaftaranPeserta', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <!-- <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="text">Selanjutnya</span>
                                </a> -->
                        </div>
                        <!-- Tab Ke Dua -->
                        <div class="tab-pane fade show active" id="pendanaan" role="tabpanel" aria-labelledby="2-tab">
                            <br><br>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Kebutuhan Dana :</label>
                                    <input type="text" class="form-control" id="rupiah" name="kebutuhanDana" placeholder="">
                                    <?= form_error('kebutuhanDana', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Sumber Dana Peserta :</label>
                                    <input type="text" class="form-control" id="rupiah" name="dana_1" placeholder="">
                                    <?= form_error('dana_1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Sumber Dana Sponsor :</label>
                                    <input type="text" class="form-control" id="rupiah" name="dana_2" placeholder="">
                                    <?= form_error('dana_2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Sumber Dana Institusi :</label>
                                    <input type="text" class="form-control" id="rupiah" name="dana_3" placeholder="">
                                    <?= form_error('dana_3', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Sumber Dana Lainnya :</label>
                                    <input type="text" class="form-control" id="rupiah" name="dana_4" placeholder="">
                                    <?= form_error('dana_4', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <!-- <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="text">Selanjutnya</span>
                                </a> -->
                        </div>
                        <!-- Tab KeTiga -->
                        <div class="tab-pane fade" id="jawab" role="tabpanel" aria-labelledby="3-tab">
                            <br><br>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Proposal :</label>
                                    <input type="file" class="form-control" id="proposal" name="proposal" placeholder="Unggah file proposal kegiatan">
                                    <?= form_error('proposal', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Pamflet/Brosur :</label>
                                    <input type="file" class="form-control" id="brosur" name="brosur" placeholder="Unggah file pamflet">
                                    <?= form_error('brosur', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="email" class="form-label">Sertifikat :</label>
                                    <input type="file" class="form-control" id="sertifikat" name="sertifikat" placeholder="Unggah file sertifikat untuk peserta">
                                    <?= form_error('sertifikat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="dateCreated" class="form-label">Laporan Kegiatan :</label>
                                    <input type="file" class="form-control" id="spj" name="spj" placeholder="Unggah Laporan Pertanggunggan Jawab" disabled>
                                    <?= form_error('spj', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <!-- <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="text">Selanjutnya</span>
                                </a> -->
                        </div>
                        <!-- Tab Ke Empat -->
                        <div class="tab-pane fade" id="penanggung" role="tabpanel" aria-labelledby="4-tab">
                            <br><br>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Penanggung Jawab :</label>
                                    <input type="text" class="form-control" id="accountCreated" name="accountCreated" placeholder="<?= $user['name']; ?>" value="<?= $user['name']; ?>" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="email" class="form-label">Email :</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="<?= $user['email']; ?>" value="<?= $user['email']; ?>" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="dateCreated" class="form-label">Didaftarkan Tanggal :</label>
                                    <input type="text" class="form-control" id="dateCreated" name="dateCreated" placeholder="<?= date('d F Y'); ?>" value="<?= time(); ?>" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="dateCreated" class="form-label">Contact Person :</label>
                                    <input type="text" class="form-control" id="cp" name="cp" placeholder="">
                                    <?= form_error('cp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-icon-split" type="submit">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Daftarkan</span>
                            </button>
                        </div>
                    </div>


                    <script type="text/javascript">
                        var rupiah = document.getElementById('rupiah');
                        rupiah.addEventListener('keyup', function(e) {
                            // tambahkan 'Rp.' pada saat form di ketik
                            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                            rupiah.value = formatRupiah(this.value, 'Rp. ');
                        });

                        /* Fungsi formatRupiah */
                        function formatRupiah(angka, prefix) {
                            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                                split = number_string.split(','),
                                sisa = split[0].length % 3,
                                rupiah = split[0].substr(0, sisa),
                                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                            // tambahkan titik jika yang di input sudah menjadi angka ribuan
                            if (ribuan) {
                                separator = sisa ? '.' : '';
                                rupiah += separator + ribuan.join('.');
                            }

                            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                        }
                    </script>




                    <!-- </form> -->
                    <?= form_close(); ?>
                </div>






            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <script type="text/javascript"></script>