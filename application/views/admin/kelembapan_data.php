<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg">
                    <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">ID Pos</th>
                                            <th scope="col">Nama Pos</th>
                                            <th scope="col">Januari</th>
                                            <th scope="col">Februari</th>
                                            <th scope="col">Maret</th>
                                            <th scope="col">April</th>
                                            <th scope="col">Mei</th>
                                            <th scope="col">Juni</th>
                                            <th scope="col">Juli</th>
                                            <th scope="col">Agustus</th>
                                            <th scope="col">September</th>
                                            <th scope="col">Oktober</th>
                                            <th scope="col">November</th>
                                            <th scope="col">Desember</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                
                                                <td><?= $kelembapanId['id_pos']; ?></td>
                                                <td><?= $kelembapanId['nama_pos']; ?></td>
                                                <td><?= $kelembapanId['jan']; ?></td>
                                                <td><?= $kelembapanId['feb']; ?></td>
                                                <td><?= $kelembapanId['mar']; ?></td>
                                                <td><?= $kelembapanId['apr']; ?></td>
                                                <td><?= $kelembapanId['mei']; ?></td>
                                                <td><?= $kelembapanId['jun']; ?></td>
                                                <td><?= $kelembapanId['jul']; ?></td>
                                                <td><?= $kelembapanId['ags']; ?></td>
                                                <td><?= $kelembapanId['sep']; ?></td>
                                                <td><?= $kelembapanId['okt']; ?></td>
                                                <td><?= $kelembapanId['nov']; ?></td>
                                                <td><?= $kelembapanId['desem']; ?></td>
                                                
                                            </tr>
                                           
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->