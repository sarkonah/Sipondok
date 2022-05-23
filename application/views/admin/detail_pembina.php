<div class="modal-dialog">
    <div class=" modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Pembina</h5>
        </div>
        <div class="modal-body">


            <div class="row">


            </div>
            <table class="table">

                <tr>
                    <th>Nama</th>
                    <th>Domisili </th>
                    <th>Nomer HP </th>
                    <th>Status </th>
                </tr>

                <tr>

                    <td> <?php echo $detail_pembina->nama_pembina ?></td>
                    <td> <?php echo $detail_pembina->dom_pembina ?></td>
                    <td> <?php echo $detail_pembina->nope_pembina ?></td>
                    <td> <?php echo $detail_pembina->status ?></td>



                </tr>



            </table>
        </div>