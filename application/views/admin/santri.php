<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Santri</h1>

    <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal" data-target="#tambah_santri">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Santri</span>
    </a>
    <?php echo $this->session->flashdata('message');  ?>
    <!-- DataTables -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="No: activate to sort column descending" aria-sort="ascending">No
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
                            <th class="text-center" colspan="3">Aksi</th>

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
                            <td align="center" style="width: 50">
                                <!-- <a href="<?php echo base_url('admin/data_santri/edit_santri') ?>" -->
                                <div class="btn btn-sm btn-primary btn" data-toggle="modal"
                                    data-target="#edit_santri<?= $snt->id_santri?>">
                                    <i class="fa fa-edit"></i>Edit
                            </td>
                            <td>
                                <?php echo anchor('admin/data_santri/detail_santri/'.$snt->id_santri,'<div
                                    class="btn btn-warning btn-sm"><i class="fa fa-search-plus"></i> Detail</div>') ?>
                            </td>

                        </tr>

                        <?php endforeach; ?>
                        </tr>
                    </thead>

                    <!-- Modal Tambah Santri -->
                    <div class="modal fade" id="tambah_santri" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class=" modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Santri</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url('admin/data_santri/tambah_santri') ?>"
                                        method="post" enctype="multipart/form-data">

                                        <div class="mb-6">
                                            <label for="Nama" class="form-label">Nama Santri </label>
                                            <input type="text" class="form-control" name="nama_santri" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="mb-6">
                                            <label for="Nama" class="form-label">No Induk Santri </label>
                                            <input type="text" class="form-control" name="nis_santri" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="mb-6">
                                            <label for="Nama" class="form-label">Kelas Santri </label>

                                            <select class="form-control" aria-label=".form-select-sm example"
                                                name="id_kelas">
                                                <!-- <option selected>Kelas</option> -->
                                                <?php foreach($list_kelas as $kls) :?>
                                                <option>
                                                    <?php if ($kls->id_kelas == '1')
                                                    {echo'Pegon Bacaan';}
                                                elseif ($kls->id_kelas == '2')
                                                    {echo'Lambatan';} 
                                                elseif ($kls->id_kelas == '3')
                                                    {echo'Cepatan';}
                                                elseif ($kls->id_kelas =='4')
                                                    {echo 'Screening Test';}?>
                                                    <?php endforeach; ?>
                                                </option>

                                            </select>
                                        </div>
                                        <div class="col-mb-6">
                                            <label for="Tempatlahir" class="form-label">Tempat Lahir </label>
                                            <input type="text" class="form-control" name="tempat_lahir" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="Tanggallahir" class="form-label">Tanggal Lahir
                                            </label>
                                            <input type="date" class="form-control" name="tanggal_lahir" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="gender" class="form-label">Jenis Kelamin
                                            </label>
                                            <select class="form-control" aria-label=".form-select-sm example"
                                                name="gender">
                                                <option>Putra</option>
                                                <option>Putri</option>
                                            </select>
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="statussantri" class="form-label">Status Santri
                                            </label>
                                            <select class="form-control" aria-label=".form-select-sm example"
                                                name="status_santri">
                                                <option>Kiriman</option>
                                                <option>Person</option>
                                            </select>
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="Alamat" class="form-label">Alamat
                                            </label>
                                            <input type="text" class="form-control" name="alamat" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>


                                        <div class="col-mb-6">
                                            <label for="nama_ayah" class="form-label">Nama Ayah
                                            </label>
                                            <input type="text" class="form-control" name="nama_ayah" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="nama_ibu" class="form-label">Nama Ibu
                                            </label>
                                            <input type="text" class="form-control" name="nama_ibu" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="nope_ibu" class="form-label">No HP Orang Tua
                                            </label>
                                            <input type="text" class="form-control" name="nope_ortu" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="nope_ibu" class="form-label">Alamat Orang Tua
                                            </label>
                                            <input type="text" class="form-control" name="alamat_ortu" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="nama_ibu" class="form-label">Nama Wali
                                            </label>
                                            <input type="text" class="form-control" name="nama_wali">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="nope_ibu" class="form-label">No HP Wali
                                            </label>
                                            <input type="text" class="form-control" name="nope_wali">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="nope_ibu" class="form-label">Alamat Wali
                                            </label>
                                            <input type="text" class="form-control" name="alamat_wali">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="Tanggalmasuk" class="form-label">Tanggal
                                                Masuk Pondok
                                            </label>
                                            <input type="date" class="form-control" name="tgl_masuk" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <!-- <div class="col-mb-6">
                                            <label for="nis_santri" class="form-label">No Induk Santri</label>
                                            <input type="text" class="form-control" name="nis_santri" required
                                                oninvalid="this.setCustomValidity('Data Wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div> -->

                                        <!-- <div class="col-mb-6">
                                            <label for="kelas_santri" class="form-label">Kelas Santri
                                            </label>
                                            <select class="form-control" aria-label=".form-select-sm example"
                                                name="status_kelas">
                                                <option>Kiriman</option>
                                                <option>Person</option>

                                            </select>
                                        </div> -->
                                        <br>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </div class="container-fluid">
                            </form>
                        </div>
                    </div>
                    <!-- Modal Edit santri -->
                    <?php foreach ($santri as $snt):?>
                    <div class="modal fade" id="edit_santri<?= $snt->id_santri ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class=" modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Santri</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url(). 'admin/data_santri/update_santri'; ?>"
                                        method="post" enctype="multipart/form-data">


                                        <div class="mb-6">
                                            <label for="nis_santri" class="form-label">NIS </label>
                                            <input type="text" class="form-control" name="nis_santri"
                                                value="<?php echo $snt->nis_santri ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="mb-6">
                                            <label for="nama_santri" class="form-label">Nama Santri </label>
                                            <input type="text" class="form-control" name="nama_santri"
                                                value="<?php echo $snt->nama_santri ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="id_kelas" s class="form-label">Kelas
                                            </label>
                                            <select class="form-control" aria-label=".form-select-sm example"
                                                name="id_kelas">
                                                <!-- <option
                                        selected>Jenis Kelamin</option> -->

                                                <?php foreach($list_kelas as $kls) : ?>
                                                <option value="<?php echo $kls->id_kelas?>">
                                                    <?php echo $kls->id_kelas ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-mb-6">
                                            <label for="status_santri" class="form-label">Status Santri
                                            </label>
                                            <select class="form-control" name="status_santri"
                                                value="<?php echo $snt->status_santri ?>"
                                                aria-label=".form-select-sm example">

                                                <option value="1">Person</option>
                                                <option value="2">Kiriman</option>
                                            </select>
                                        </div>
                                        <div class="col-mb-6">
                                            <label for="Tanggalmasuk" class="form-label">Tanggal
                                                Masuk Pondok
                                            </label>
                                            <input type="date" class="form-control" name="tgl_masuk"
                                                value="<?php echo $snt->tgl_masuk ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </div class="container-fluid">
                            </form>
                        </div>
                    </div>
                    <?php endforeach?>
            </div>

        </div>