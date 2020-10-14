      <h2>Data User</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm" border="1" cellspacing>
          <thead>
            <tr>
              <th>Nik</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Telp</th>
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
              <td><?php echo $datas->nik; ?></td>
              <td><?php echo $datas->nama; ?></td>
              <td><?php echo $datas->email; ?></td>
              <td><?php echo $datas->telp; ?></td>
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