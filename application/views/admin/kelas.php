<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Kelas</h1>
    <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal" data-target="#tambah_kelas">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Kelas</span>
    </a>
    <!-- DataTales Example -->



    <?php echo $this->session->flashdata('pesan_santri');  ?>

    <div class="card shadow mb-4">

        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Nama Walikelas</th>
                    <th colspan="3">AKSI</th>
                </tr>
                <?php
                $no = 1;
                foreach ($walikelas as $wlk) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td>
                        <?php if ($wlk->id_kelas == '1')
                                    {echo'Pegon Bacaan';}
                                elseif ($wlk->id_kelas == '2')
                                    {echo'Lambatan';} 
                                elseif ($wlk->id_kelas == '3')
                                    {echo'Cepatan';}
                                    elseif ($wlk->id_kelas =='4')
                                    {echo 'Screening Test';}?>
                    </td>
                    <td><?php echo $wlk->nama_walikelas?> </td>
                    <td>
                    <td align="center" style="width: 50">
                        <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal"
                            data-target="#edit_kelas">
                            <span class="icon text-white-50">
                                <i class="fas fa-pen"></i>
                            </span>
                        </a>
                    </td>
                    </td>
                    <td align="center" style="width: 50">
                        <div class="btn btn-sm btn-danger btn" data-toggle="modal"
                            data-target="#hapus_kelas<?= $wlk->id_kelas?>"><i class="fa fa-trash"></i>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>

        </div>
        </table>
    </div>

    <!-- Modal Tambah Kelas -->
    <div class=" modal fade" id="tambah_kelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class=" modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'admin/data_kelas/tambah_kelas'; ?>" method="post"
                        enctype="multipart/form-data">

                        <form class="row g-3">
                            <div class="col-mb-6">
                                <label for="kelas" class="form-label">Kelas
                                </label>
                                <select class="form-control" aria-label=".form-select-sm example" name="id_kelas">
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
                                <label for="nama_walikelas" class="form-label">Nama Walikelas
                                </label>
                                <select class="form-control" aria-label=".form-select-sm example" name="nama_walikelas">
                                    <!-- <option
                                        selected>Jenis Kelamin</option> -->

                                    <?php foreach($list_walikelas as $wkl) : ?>
                                    <option value="<?php echo $wkl->nama_walikelas?>">
                                        <?php echo $wkl->nama_walikelas ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <br>
                </div>

                <div class=" modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div class="container-fluid">
            </form>
        </div>
    </div>

    <!-- Modal Edit Kelas -->


    <div class="modal-dialog modal-lg">
        <div class=" modal-content">
            <div class="modal-header">
                <div class="modal fade" id="edit_kelas" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class=" modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Edit Kelas</h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url( 'admin/data_kelas/update_kelas')?>" method="post"
                                    enctype="multipart/form-data">

                                    <form class="row g-3">
                                        <div class="col-mb-6">
                                            <label for="kelas" class="form-label">Kelas
                                            </label>
                                            <select class="form-control" aria-label=".form-select-sm example">
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
                                        <div class="mb-6">
                                            <label for="Nama" class="form-label">Nama walikelas </label>
                                            <input type="text" class="form-control" name="nama_walikelas"
                                                value="<?php echo $wlk->nama_walikelas ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <br>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <?php foreach($walikelas as $wlk):
        ?>
                <div class="modal fade" id="hapus_kelas<?= $wlk->id_walikelas?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin akan menghapus data ini?</p>

                                <div class="modal-footer">
                                    <?php echo anchor('admin/data_kelas/hapus_kelas/' .$wlk->id_walikelas, '<div class="btn btn-danger btn">Hapus</div>') ?>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach?>