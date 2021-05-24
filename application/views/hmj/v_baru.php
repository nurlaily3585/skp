<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <p class="mb-4">Informasi detail kegiatan baru saya.</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="form-outer">
                <!-- <form method="post" action="<?= base_url() . 'Hmj/tambah_aksi'; ?>"> -->
                <form class="v_baru" method="POST" action="<?= base_url('Hmj/v_baru'); ?>">
                    <!-- <div class="form-group">
                        <input type="text" class="form-control form-control-v_baru" id="judul" name="judul">
                        <?= form_error('judul', '<small class="text-danger  pl-3">', '</small>'); ?>
                    </div> -->
                    <div class="page">
                        <a href="#" class="btn btn-primary btn-circle btn-lg">
                            1
                        </a>
                        <div class="title">Detail Kegiatan</div>
                        <div class="mb-3">
                            <label for="" class="form-label">Judul Kegiatan *</label>
                            <input type="text" class="form-control form-control-v_baru" id="judul" name="judul" placeholder="Tuliskan judul kegiatan Anda." data-toggle="tooltip" title="Judul kegiatan yang menarik akan mempengaruhi jumlah peserta." value="<?= set_value('judul'); ?>">
                            <?= form_error('judul', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Deskripsi Kegiatan *</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="Deskripsikan kegiatan Anda dengan detail." data-toggle="tooltip" title="Deskripsi kegiatan yang detail akan mempengaruhi jumlah peserta." value="<?= set_value('detail'); ?>">
                            <?= form_error('detail', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Batas Jumlah Peserta *</label>
                            <input type="number" class="form-control form-control-v_baru" id="batasPeserta" name="batasPeserta" placeholder="Tuliskan Batasan Jumlah Peserta pada kegiatan Anda." data-toggle="tooltip" title="Tuliskan Batasan Jumlah Peserta pada kegiatan Anda." value="<?= set_value('batasPeserta'); ?>">
                            <?= form_error('batasPeserta', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Biaya Pendaftaran Tiap Peserta : *</label>
                            <input type="text" class="form-control" id="rupiah5" name="pendaftaranPeserta" placeholder="Rp.0" value="<?= set_value('kebutuhanDana'); ?>">
                            <?= form_error('pendaftaranPeserta', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Penyelenggara :*</label>
                            <?= form_error('pilih', '<small class="text-danger  pl-3">', '</small>'); ?>
                            <div class="dropdown mb-4">
                                <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pilih
                                </button>
                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                    <?php foreach ($penyelenggara as $p) : ?>
                                        <a class="dropdown-item" href="#" name="pilih" id="pilih" value="<?= $p['nama']; ?>">
                                            <?= $p['nama']; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kategori Kegiatan :*</label>
                            <?= form_error('pilih', '<small class="text-danger  pl-3">', '</small>'); ?>
                            <div class="dropdown mb-4">
                                <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pilih
                                </button>
                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                    <?php foreach ($kategori as $k) : ?>
                                        <a class="dropdown-item" href="#" name="kategori" id="kategori" value="<?= $k['name']; ?>">
                                            <?= $k['name']; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <label for="" class="form-label">Jenis Kegiatan :*</label>
                            <?= form_error('pilih', '<small class="text-danger  pl-3">', '</small>'); ?>
                            <div class="dropdown mb-4">
                                <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pilih
                                </button>
                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                    <?php foreach ($kategori_detail as $kd) : ?>
                                        <a class="dropdown-item" href="#" name="kategori" id="kategori" value="<?= $kd['name']; ?>">
                                            <?= $kd['name']; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="" class="btn btn-primary btn-icon-split next-2">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <span class="text">Selanjutnya</span>
                        </a>
                    </div>
                    <div class="page">
                        <a href="#" class="btn btn-primary btn-circle btn-lg">
                            2
                        </a>
                        <div class="title">Pendanaan</div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kebutuhan Dana : *</label>
                            <input type="text" class="form-control" id="rupiah" name="kebutuhanDana" placeholder="Rp.0" value="<?= set_value('kebutuhanDana'); ?>">
                            <?= form_error('kebutuhanDana', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="perhitungan">
                            <label for="" class="form-label">Sumber Dana Peserta : *</label>
                            <input type="text" class="form-control" id="rupiah1" name="danaPeserta" placeholder="Rp.0" value="<?= set_value('danaPeserta'); ?>">
                            <?= form_error('danaPeserta', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sumber Dana Sponsor : *</label>
                            <input type="text" class="form-control" id="rupiah2" name="danaSponsor" placeholder="Rp.0" value="<?= set_value('danaSponsor'); ?>">
                            <?= form_error('danaSponsor', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sumber Dana Institusi : *</label>
                            <input type="text" class="form-control" id="rupiah3" name="danaInstitusi" placeholder="Rp.0" value="<?= set_value('danaInstitusi'); ?>">
                            <?= form_error('danaInstitusi', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sumber Dana Lainnya : *</label>
                            <input type="text" class="form-control" id="rupiah4" name="danaLain" placeholder="Rp.0" value="<?= set_value('danaLain'); ?>">
                            <?= form_error('danaLain', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="" class="btn btn-primary btn-icon-split prev-2">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-circle-left"></i>
                            </span>
                            <span class="text">Sebelumnya</span>
                        </a>
                        <a href="" class="btn btn-primary btn-icon-split next-3">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <span class="text">Selanjutnya</span>
                        </a>
                    </div>
                    <div class="page">
                        <a href="#" class="btn btn-primary btn-circle btn-lg">
                            3
                        </a>
                        <div class="title">Pertanggungan Jawab</div>
                        <div class="mb-3">
                            <label for="" class="form-label">Proposal : *</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-cloud-upload-alt"></i></span>
                                <input type="file" class="form-control" id="proposal" name="proposal" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?= set_value('proposal'); ?>">
                                <?= form_error('proposal', '<small class="text-danger  pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Pamflet/Brosur : *</label>
                            <input type="file" class="form-control" id="brosur" name="brosur" value="<?= set_value('brosur'); ?>">
                            <?= form_error('brosur', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sertifikat : *</label>
                            <input type="file" class="form-control" id="sertifikat" name="sertifikat" value="<?= set_value('sertifikat'); ?>">
                            <?= form_error('sertifikat', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Laporan Kegiatan :</label>
                            <input type="file" class="form-control" id="laporan" name="laporan" value="<?= set_value('laporan'); ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="" class="btn btn-primary btn-icon-split prev-3">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-circle-left"></i>
                            </span>
                            <span class="text">Sebelumnya</span>
                        </a>
                        <a href="" class="btn btn-primary btn-icon-split next-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <span class="text">Selanjutnya</span>
                        </a>
                    </div>
                    <div class="page">
                        <a href="#" class="btn btn-primary btn-circle btn-lg">
                            4
                        </a>
                        <div class="title">Penanggung Jawab</div>
                        <div class="mb-3">
                            <label for="" class="form-label">Penanggung Jawab :*</label>
                            <input type="text" class="form-control" id="penanggungjawab" name="penanggungjawab" placeholdervalue="<?= $user['firstname'] . ' ' . $user['lastname']; ?>" disabled>
                            <?= form_error('penanggungjawab', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email : *</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" disabled>
                            <?= form_error('email', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Terdaftar pada : *</label>
                            <input type="text" class="form-control" id="tglDaftar" name="tglDaftar" value="<?= date('d M Y'); ?>" disabled>
                            <?= form_error('tglDaftar', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kontak : *</label>
                            <input type="number" class="form-control" id="cp" name="cp" value="<?= set_value('cp'); ?>">
                            <?= form_error('cp', '<small class="text-danger  pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="<?= base_url('hmj/mendaftar'); ?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-circle-left"></i>
                            </span>
                            <span class="text">Sebelumnya</span>
                        </a>
                        <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check-circle"></i>
                            </span>
                            <span class="text">Simpan</span>
                        </button>
                    </div>





                </form>
            </div>








            <!-- Ini baru -->























        </div>
        <script type="text/javascript">
            var rupiah = document.getElementById('rupiah');
            rupiah.addEventListener('keyup', function(e) {
                // tambahkan 'Rp.' pada saat form di ketik
                // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                rupiah.value = formatRupiah(this.value, 'Rp. ');
            });
            var rupiah1 = document.getElementById('rupiah1');
            rupiah1.addEventListener('keyup', function(e) {
                rupiah1.value = formatRupiah(this.value, 'Rp. ');
            });
            var rupiah2 = document.getElementById('rupiah2');
            rupiah2.addEventListener('keyup', function(e) {
                rupiah2.value = formatRupiah(this.value, 'Rp. ');
            });
            var rupiah3 = document.getElementById('rupiah3');
            rupiah3.addEventListener('keyup', function(e) {
                rupiah3.value = formatRupiah(this.value, 'Rp. ');
            });
            var rupiah4 = document.getElementById('rupiah4');
            rupiah4.addEventListener('keyup', function(e) {
                rupiah4.value = formatRupiah(this.value, 'Rp. ');
            });
            var rupiah5 = document.getElementById('rupiah5');
            rupiah5.addEventListener('keyup', function(e) {
                rupiah5.value = formatRupiah(this.value, 'Rp. ');
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

            // Untuk Menghitung Otomatis
            $(".perhitungan").keyup(function() {
                var batasPeserta = parseInt($("#batasPeserta").val())
                var rupiah5 = parseInt($("#rupiah5").val())
                var rupiah1 = batasPeserta * rupiah5;
                $("#rupiah1").attr("value", rupiah1)

            });
        </script>

    </div>