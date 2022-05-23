<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Detail Santri</h1>

    <!-- <div class="row row-cols-1 row-cols-md-2 g-2"> -->
    <!-- <div class="col col-xl-4 col-lg-5"> -->
    <!-- <div class="card">
            <div class="col-md-4">
                <img src="<?php echo base_url()?>assets/img/3.png" class="img-fluid rounded-start" alt="...">
            </div> -->
    <!-- </div> -->
    <!-- </div> -->

    <div class="col">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Detail Santri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data Orang Tua</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">

            </div>
            <table class="table">
                <tr>
                    <th>Nama Santri</th>
                    <td> <?php echo $detail_santri->nama_santri ?></td>
                </tr>
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
                    <th>Alamat_santri</th>
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
                    <th>Tanggal_keluar</th>
                    <td> <?php echo $detail_santri->tgl_keluar ?></td>
                </tr>
            </table>


        </div>

    </div>