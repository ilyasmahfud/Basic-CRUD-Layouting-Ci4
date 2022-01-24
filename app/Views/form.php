<?= $this->extend('layouts/index.php') ?>

<?= $this->section('content') ?>

<?php
$validation = \config\Services::validation();
// helper('form');
?>
<div class="content">
    <main id="main">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 text-left z-index-3 mx-auto my-auto card">
                    <center class="mt-3">
                        <h3>Form Pengajuan</h3>
                    </center>
                    <form enctype="multipart/form-data" action="<?= base_url('create/add') ?>" method="post" id="form-project">

                        <div class="card mb-3 mt-3">
                            <div class="card-header bg-transparant">
                                <h5 class="text-black text-center"> Project Leader </h5>
                            </div>
                            <div class=" card-body">
                                <div class="mb-3">
                                    <center>
                                        <div class="col-sm-4">
                                            <img src="<?= base_url('assets/img/profil-default.png'); ?>" alt="" class="img-thumbnail img-preview">
                                        </div>
                                    </center>
                                    <center>
                                        <div class="custom-file">
                                            <input style="display: none;" name="foto" type="file" class="custom-file-input <?php echo ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" id="foto" onChange="previewImg()">
                                            <div class="invalid-feedback mt-2">
                                                <?php echo $validation->getError('foto'); ?>
                                            </div><br>
                                            <label class="custom-file-label" for="foto">Pilih gambar</label>
                                        </div>
                                    </center>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-4 mr-1">
                                        <input type="text" name="projectLeaderName" class="form-control">
                                    </div>
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4 mr-1">
                                        <input type="email" name="projectLeaderEmail" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header bg-transparant">
                                <h5 class="text-black text-center"> Client </h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Project Name</label>
                                    <div class="col-sm-4 mr-1">
                                        <input type="text" name="projectName" class="form-control">
                                    </div>
                                    <label class="col-sm-2 col-form-label">Client</label>
                                    <div class="col-sm-4 mr-1">
                                        <input type="text" name="client" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Start Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="startDate" class="form-control">
                                    </div>
                                    <label class="col-sm-2 col-form-label">End Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="endDate" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button class="btn btn-success text-white btn-sm" type="submit">Add Project</button>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const fotoLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        fotoLabel.textContent = foto.files[0].name;

        const fileFoto = new FileReader();
        fileFoto.readAsDataURL(foto.files[0]);

        fileFoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

<?= $this->endSection() ?>