<?= $this->extend('layouts/index.php') ?>

<?= $this->section('content') ?>
<div class="content">
    <main id="main">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 text-left z-index-3 mx-auto my-auto card">
                    <center class="mt-3">
                        <h3>Form Pengajuan</h3>
                    </center>
                    <form action="<?= base_url('editData/update/' . $data['id']) ?>" method="post" id="form-project">

                        <div class="card mb-3 mt-3">
                            <div class="card-header bg-transparant">
                                <h5 class="text-black text-center"> Project Leader </h5>
                            </div>
                            <div class=" card-body">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-4 mr-1">
                                        <input value="<?= $data['projectLeaderName']; ?>" type="text" name="projectLeaderName" class="form-control">
                                    </div>
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4 mr-1">
                                        <input value="<?= $data['projectLeaderEmail']; ?>" type="email" name="projectLeaderEmail" class="form-control">
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
                                        <input value="<?= $data['projectName']; ?>" type="text" name="projectName" class="form-control">
                                    </div>
                                    <label class="col-sm-2 col-form-label">Client</label>
                                    <div class="col-sm-4 mr-1">
                                        <input type="text" value="<?= $data['client']; ?>" name="client" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Start Date</label>
                                    <div class="col-sm-4">
                                        <input value="<?= $data['startDate']; ?>" type="date" name="startDate" class="form-control">
                                    </div>
                                    <label class="col-sm-2 col-form-label">End Date</label>
                                    <div class="col-sm-4">
                                        <input value="<?= $data['endDate']; ?>" type="date" name="endDate" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Progres</label>
                                    <div class="">
                                        <input value="<?= $data['progress']; ?>" onchange="updateTextInput(this.value)" type="range" min="0" max="100" class="form-range" name="progress" id="customRange1">
                                        <center>
                                            <input class="text-center" disabled style="border: none" type="text" id="actualRange"></input>
                                        </center>
                                        <script>
                                            function updateTextInput(val) {
                                                document.getElementById('actualRange').value = val + "%";
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button class="btn btn-success text-white btn-sm" type="submit">Update Project</button>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

<?= $this->endSection() ?>