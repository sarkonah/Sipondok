<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Santri</h1>


    </a>
    <?php echo $this->session->flashdata('message');  ?>
    <!-- DataTales -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th> No
                            </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="NIS: activate to sort column descending" aria-sort="ascending"
                                style="width: 149.467px;">NIS</th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="Nama Santri: activate to sort column descending"
                                aria-sort="ascending" style="width: 149.467px;">Nama Santri </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="Kelas Santri: activate to sort column descending"
                                aria-sort="ascending" style="width: 149.467px;">Kelas Santri</th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="Status Santri: activate to sort column descending"
                                aria-sort="ascending" style="width: 149.467px;">Status Santri</th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="Tanggal Masuk: activate to sort column descending"
                                aria-sort="ascending" style="width: 149.467px;">Tanggal Masuk</th>

                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="Tanggal Masuk: activate to sort column descending"
                                aria-sort="ascending" style="width: 149.467px;">Nama Ayah</th>
                            <?php
                            $no = 1;
                            foreach ($santri as $snt) : ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $snt->nis_santri ?></td>
                            <td><?php echo $snt->nama_santri ?></td>
                            <td>
                                <?php if ($snt->id_kelas == '1') {
                                    echo 'Pegon Bacaan';
                                } elseif ($snt->id_kelas == '2') {
                                    echo 'Lambatan';
                                } elseif ($snt->id_kelas == '3') {
                                    echo 'Cepatan';
                                } elseif ($snt->id_kelas == '4') {
                                    echo 'Screening Test';
                                } ?>
                            </td>
                            <td><?php echo $snt->status_santri ?></td>
                            <td><?php echo $snt->tgl_masuk ?></td>


                        </tr>
                        <?php endforeach; ?>
                        </tr>
                    </thead>