<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Mata Pelajaran</h1>
    <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal"
        data-target="#tambah_detail_indikator">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Mata Pelajaran</span>
    </a>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">

                    <tr>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                    </tr>
                    <?php  
		$no=1;
	      foreach($kelas as $detail_indikator) : ?>
                    <tr>
                        <td> <?php echo $detail_indikator->nama_mapel ?></td>
                        <td> <?php echo $detail_indikator->nilai_ratarata ?></td>
                        <td align="center" style="width: 50">
                            <!-- <a href="<?php echo base_url('admin/detail_indikator/edit_indikator') ?>" -->
                            <div class="btn btn-sm btn-primary btn" data-toggle="modal"
                                data-target="#edit_indikator<?= $detail_indikator->id_mapel?>">
                                <i class="fa fa-edit"></i>Edit
                        </td>

                    </tr>
                    <?php endforeach; ?>


                </table>
            </div>


            <!-- Modal Tambah Indikator -->
            <div class="modal fade" id="tambah_detail_indikator" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class=" modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Indikator Nilai</h5>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url() . 'admin/data_indikator/tambah_detail_indikator'; ?>"
                                method="post" enctype="multipart/form-data">

                                <div class="mb-6">
                                    <label for="id_kelas" class="form-label">Nama Kelas</label>
                                    <input type="text" class="form-control" name="nama_kelas"
                                        value="<?php echo $kelas->nama_kelas ?>" readonly>
                                    <input type="text" name="id_kelas" class="form-control"
                                        value="<?php echo $kelas->id_kelas ?>" hidden>
                                </div>
                                <div class="mb-6">
                                    <label for="Nama mapel" class="form-label">Nama Pelajaran</label>
                                    <input type="text" class="form-control" name="nama_mapel" required
                                        oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="mb-6">
                                    <label for="nilai_ratarata" class="form-label">Nilai Rata Rata</label>
                                    <input type="text" class="form-control" name="nilai_ratarata" required
                                        oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                        oninput="setCustomValidity('')">
                                </div>
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

            <!-- Modal Edit Indikator -->
            <?php foreach ($mapel as $mpl):?>
            <div class="modal fade" id="edit_indikator<?= $mpl->id_mapel ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class=" modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit
                            </h5>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url(). 'admin/detail_indikator/update_indikator'; ?>"
                                method="post" enctype="multipart/form-data">

                                <div class="mb-6">
                                    <label for="Nama " class="form-label">Nama Pelajaran </label>
                                    <input type="text" class="form-control" name="nama_mapel"
                                        value="<?php echo $mpl->nama_mapel ?>" required
                                        oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="mb-6">
                                    <label for="Nama" class="form-label">Nilai Minimal </label>
                                    <input type="text" class="form-control" name="indikator_nilai"
                                        value="<?php echo $mpl->indikator_nilai ?>" required
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
                </div>
            </div>
            <?php endforeach?>