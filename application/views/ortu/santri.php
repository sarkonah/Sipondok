<div class="container-fluid">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo base_url()?>assets/img/3.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title"> <?php echo $detail_santri->nama_santri ?></h4>
                    <table class="table">
                        <tr>
                            <th>NIS Santri</th>
                            <td> <?php echo $detail_santri->nis_santri ?></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td> <?php echo $detail_santri->id_kelas ?></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td> <?php echo $detail_santri->gender ?></td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td> <?php echo $detail_santri->tempat_lahir ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td> <?php echo $detail_santri->tanggal_lahir ?></td>
                        </tr>
                        <tr>
                            <th>Alamat santri</th>
                            <td> <?php echo $detail_santri->alamat_santri ?></td>
                        </tr>
                        <tr>
                            <th>Status Santri</th>
                            <td> <?php echo $detail_santri->status_santri ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <td> <?php echo $detail_santri->tgl_masuk ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal keluar</th>
                            <td> <?php echo $detail_santri->tgl_keluar ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Orang Tua</h4>
                <table class="table">
                    <tr>
                        <th>Nama Ayah</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Nama Ibu</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>No HP Orang Tua</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Alamat Orang Tua</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Nama Wali</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>No HP Wali</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Alamat Wali</th>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rapor</h4>

            </div>
        </div>
    </div>
</div>