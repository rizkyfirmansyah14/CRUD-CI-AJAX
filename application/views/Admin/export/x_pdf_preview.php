<h2>Section title</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>Instansi</th>
                <th>Kategori</th>
                <th>File</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                if($c_user>0)
                {
                    foreach ($user as $datas) 
                {
            ?>
              <tr>
                <td><?php echo $datas->id_p; ?></td>
                <td><?php echo $datas->judul_p; ?></td>
                <td><?php echo $datas->isi_p; ?></td>
                <td><?php echo $datas->tgl_p; ?></td>
                <td><?php echo $datas->lokasi_p; ?></td>
                <td><?php echo $datas->instansi_p; ?></td>
                <td><?php echo $datas->kategori_p; ?></td>
                <!-- <td><img style="width: 1px;" src="<?php echo base_url('assets/gambar').$datas->file_p ?>" alt=""></td> -->
              </tr>
              <?php }
            }
            else{
                ?>
              <tr>

              </tr>

              <?php
             } ?>
            </tbody>
          </table>
        </div>