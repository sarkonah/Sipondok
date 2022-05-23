<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Pembina</h1><!-- DataTales Example -->
    <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal" data-target="#tambah_pembina">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Pembina</span>
    </a>


    <?php echo $this->session->flashdata('message');  ?>

    <div class="card shadow mb-4">

        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Pembina</th>
                    <th>Status</th>
                    <th class="text-center" colspan="2">AKSI</th>
                </tr>
                <?php 
  $no=1;
  foreach($pembina as $pmb) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pmb->nama_pembina ?></td>
                    <td><?php echo $pmb->status?></td>
                    <td>
                        <?php echo anchor('admin/data_pembina/detail_pembina/'.$pmb->id_pembina,'<div
                                    class="btn btn-warning btn-sm"><i class="fa fa-search-plus"></i> Detail</div>') ?>
                    </td>
                </tr>

                <?php endforeach; ?>
        </div>
        </table>

        <!-- Modal Tambah Pembina -->
        <div class=" modal fade" id="tambah_pembina" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">

            <div class="modal-dialog modal-lg">
                <div class=" modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pembina</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('admin/data_pembina/tambah_pembina'); ?>" method="post"
                            enctype="multipart/form-data">

                            <div class="mb-6">
                                <label for="Nama" class="form-label">Nama Lengkap </label>
                                <input type="text" class="form-control" name="nama_pembina" required
                                    oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="mb-6">
                                <label for="Domisili" class="form-label">Domisili</label>
                                <input type="text" class="form-control" name="dom_pembina" required
                                    oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="mb-6">
                                <label for="No HP" class="form-label">No HP</label>
                                <input type="text" class="form-control" name="nope_pembina" required
                                    oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="mb-6">
                                <label for="jabatan" class=" form-label">Jabatan</label>
                                <input type="text" class="form-control" name="status" required
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

        <!-- Modal Detail Pembina 
        <?php foreach ($pembina as $pmb):?>
        <div class="modal fade" id="detail_pembina<?= $pmb->id_pembina ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class=" modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pembina</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() . 'admin/data_pembina/detail_pembina'; ?>" method="post"
                            enctype="multipart/form-data">

                            <div class="row">
                                <table class="table">

                                    <div class="mb-6">
                                        <label for="nama" class=" form-label">nama</label>
                                        <input type="text" class="form-control" name="nama_pembina"
                                            value="<?php echo $pmb->nama_pembina ?>" required
                                            oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                            oninput="setCustomValidity('')">
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                        

    </div>
    <?php endforeach?>-->