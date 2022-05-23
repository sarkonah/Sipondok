<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Kelas</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No </th>
                            <th class=" text-center"> NIS</th>
                            <th class="text-center">Nama Santri </th>
                            <th class="text-center">Kelas Santri</th>
                            <th class=" text-center">Aksi</th>
                            <?php 
                            $no=1;
                            foreach($santri as $snt) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $snt->nis_santri ?></td>
                            <td><?php echo $snt->nama_santri?></td>
                            <td>
                                <?php if ($snt->id_kelas == '1')
                                    {echo'Pegon Bacaan';}
                                elseif ($snt->id_kelas == '2')
                                    {echo'Lambatan';} 
                                elseif ($snt->id_kelas == '3')
                                    {echo'Cepatan';}
                                    elseif ($snt->id_kelas =='4')
                                    {echo 'Screening Test';}?>
                            </td>
                            <td align="center" style="width: 50">
                                <a href="<?php echo base_url('guru/input_rapor') ?>" class="btn btn-sm btn-primary btn">
                                    <i class="fa fa-pen"></i>
                                    Input Rapor
                        </tr>

                        <?php endforeach; ?>
                        </tr>
                    </thead>
            </div>


        </div>