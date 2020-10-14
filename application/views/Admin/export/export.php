<!DOCTYPE html>
<html>
<head>
     <title>Tutorial Export Dengan Codeigniter</title>
</head>
<body>
     <a href="<?php echo site_url('sistem/export')?>">Export Data</a>
     <table border="1" cellspacing="0">
          <thead>
               <tr>
                    <th style="width: 7%; text-align: center;">Nik</th>
                    <th style="width: 30%">Nama</th>
                    <th>email</th>
                    <th>username</th>
                    <th style="text-align: center;">no-telp</th>
               </tr>
          </thead>
          <tbody>
               <?php $index = 1; ?>
               <?php foreach($semua_pengguna as $masyarakat): ?>
                    <tr>
                         <td style="width: 7%; text-align: center;"><?php echo $index++; ?></td>
                         <td style="width: 30%"><?php echo $masyarakat->nama; ?></td>
                         <td><?php echo $masyarakat->email; ?></td>
                         <td><?php echo $masyarakat->username; ?></td>
                         <td style="text-align: center;"><?php echo $masyarakat->telp; ?></td>
                    </tr>
               <?php endforeach; ?>
          </tbody>
     </table>
</body>
</html>