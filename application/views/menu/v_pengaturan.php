<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <p class="mb-4">Pengaturan kegiatan</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="form-outer">
                <div class="form-group">
                    <select name="kategori" id="kategori" class="form-control input-lg">
                        <option value="">Pilih Kategori</option>
                        <?php
                        foreach ($kategori as $kat) {
                            echo '<option value="' . $kat->id_kategori . '">' . $kat->name . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <div class="form-group">
                        <select name="kat_detail" id="kat_detail" class="form-control input-lg">
                            <option value="">Pilih Detail</option>
                            <?php
                            foreach ($kat_detail as $kd) {
                                echo '<option value="' . $kat_detail->id_kategori_detail . '">' . $kat_detail->name . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                </div>

                <script>
                    $(document).ready(function() {
                        $('#kategori').change(function() {
                            var id_kategori = $('#kategori').val();
                            if (id_kategori != '') {
                                $.ajax({
                                    url: "<?= base_url(); ?>menu/fetch_kat_detail",
                                    method: "POST",
                                    data: {
                                        id_kategori: id_kategori
                                    },
                                    success: function(data) {
                                        $('#kat_detail').html(data);
                                    }
                                })
                            } else {
                                $('#kat_detail').html('<option value="">Pilih Detail</option>');
                            }
                        });
                    });
                </script>