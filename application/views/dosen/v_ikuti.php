<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <p class="mb-4">Informasi detail kegiatan.</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Example label</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Another label</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">Another label</label>
                <div class="dropdown mb-4">
                    <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilih
                    </button>
                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <a href="<?= base_url('dosen/mendaftar'); ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-check-double"></i>
                    </span>
                    <span class="text">Saya Mendaftar</span>
                </a>
            </div>
        </div>
    </div>