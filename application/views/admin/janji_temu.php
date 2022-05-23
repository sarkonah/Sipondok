<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Janji Temu</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center" colspan="2">Aksi</th>
                        </tr>
                        <?php
                $no = 1;
                foreach ($walikelas as $jnj) : ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $jnj->nama_walikelas?> </td>
                            <td><?php echo $jnj->dom_walikelas ?></td>
                            <td align="center" style="width: 50">
                                <a href="#" class="btn btn-primary btn-circle">
                                    <i class="fab fa-whatsapp lg"></i>
                            <td align="center" style="width: 50">
                                <a href="<?php echo base_url('admin/detail_janji_temu') ?>"
                                    class="btn btn-sm btn-primary btn">
                                    <i class="fa fa-file"></i>
                                    Detail
                        </tr>

                        <?php endforeach; ?>

            </div>
            </thead>
        </div>