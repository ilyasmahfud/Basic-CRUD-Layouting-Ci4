<?= $this->extend('layouts/index.php') ?>

<?= $this->section('content') ?>
<div class="content">
    <!-- alert -->
    <?php
    if (session()->getFlashdata('DeleteSuccess')) { ?>
        <div>
            <script>
                Swal.fire('Successfully Delete Project')
            </script>
        </div>
    <?php session()->remove('DeleteSuccess');
    }
    if (session()->getFlashdata('UpdateSuccess')) { ?>
        <div>
            <script>
                Swal.fire('Data Berhasil Diedit/Diupdate')
            </script>
        </div>
    <?php session()->remove('UpdateSuccess');
    }
    if (session()->getFlashdata('AddSuccess')) { ?>
        <div>
            <script>
                Swal.fire('Successfully Add New Project')
            </script>
        </div>
    <?php session()->remove('AddSuccess');
    }
    ?>
    <main id="main">
        <div class="container-fluid mt-5">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="user" role="tabpanel">
                    <div class="card">
                        <div class="card-header bg-transparant">
                            <h5 class="text-black text-center"> Project Monitoring </h5>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url('create'); ?>">
                                <button type="button" class="btn btn-primary mb-3">Tambah Data</button>
                            </a>
                            <table class="table display nowrap" id="table">
                                <thead>
                                    <tr class="text-left">
                                        <th>PROJECT NAME</th>
                                        <th>CLIENT</th>
                                        <th>PROJECT LEADER</th>
                                        <th>START DATE</th>
                                        <th>END DATE</th>
                                        <th>PROGRESS</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $value) : ?>
                                        <tr class="text-left">

                                            <td><?= $value['projectName'] ?></td>
                                            <td><?= $value['client'] ?></td>
                                            <td>
                                                <div class='d-flex align-items-center'>
                                                    <img style="width:50px;" class="bg-info rounded-circle me-3" src='http://assets.kompasiana.com/items/album/2021/03/24/blank-profile-picture-973460-1280-605aadc08ede4874e1153a12.png?t=o&v=770'></img>
                                                    <div class='d-flex flex-column'>
                                                        <h6 class='mb-1 text-dark text-sm'><?= $value['projectLeaderName']; ?></h6>
                                                        <span class='text-xs'><?= $value['projectLeaderEmail']; ?></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?= $value['startDate']; ?></td>
                                            <td><?= $value['endDate']; ?></td>
                                            <td>
                                                <?php
                                                if ((int)$value['progress'] < 100) {
                                                    echo "
                                                    <div class='row'>
                                                        <div class='col-8'>
                                                            <div class='progress' style='height: 20px;'>
                                                            <div class='progress-bar bg-primary' role='progressbar' style='width: " . $value['progress'] . "%;' aria-valuemin='0' aria-valuemax='100'></div>
                                                            </div>    
                                                        </div>
                                                        <div class='col-2'>
                                                            <p>" . $value['progress'] . "%</p>    
                                                        </div>
                                                    </div>
                                                    ";
                                                } else {
                                                    echo "
                                                        <div class='row'>
                                                            <div class='col-8'>
                                                                <div class='progress' style='height: 20px;'>
                                                                <div class='progress-bar bg-success' role='progressbar' style='width: " . $value['progress'] . "%;' aria-valuemin='0' aria-valuemax='100'></div>
                                                                </div>    
                                                            </div>
                                                            <div class='col-2'>
                                                                <p>" . $value['progress'] . "%</p>    
                                                            </div>
                                                        </div>
                                                    ";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="#" onclick="validasi(<?= $value['id'] ?>)" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                                <a href="<?= base_url('editData/' . $value['id'] . '') ?>" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="employee" role="tabpanel">
                    <h1>Ini employee</h1>
                </div>
            </div>

        </div>
    </main>
</div>
<script>
    function validasi(param) {
        Swal.fire({
            title: 'Apakah Kamu Yakin?',
            text: "Data Akan Terhapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yaa, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "deleteData/" + param;
            }
        })
    }
</script>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

<?= $this->endSection() ?>