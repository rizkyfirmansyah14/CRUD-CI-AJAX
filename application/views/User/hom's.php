<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<!-- <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"> -->

	<!-- STYLE CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/homs/css/style.css">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.css">

</head>


<body>

<?php
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: 8467d75b54d4e45fe1a43f98b8f77bab"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $listKota = array(); //bikin array untuk nampung list kota

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {

        $arrayResponse = json_decode($response, true); //decode response dari raja ongkir, json ke array
      
        $tempListKota = $arrayResponse['rajaongkir']['results']; // ambil array yang dibutuhin aja, disini resultnya aja

        //looping array temporary untuk masukin object yang kita butuhin
        foreach ($tempListKota as $value) {
            //bikin object baru
            $kota = new stdClass();
            $kota->id = $value['city_id']; //id kotanya
            $kota->nama = $value['city_name']; //nama kotanya

            array_push($listKota, $kota); //push object kota yang kita bikin ke array yang nampung list kota

        }

        //$listKota : udah berisi list kota yang kita butuhin

        //ini untuk ngecek aja isi $list kota udah bener apa belum
		

    }

?>

	<div class="imgback">
		<img src="<?php echo base_url('css/homs/images/bg.jpg')?>" width="100%" style="position: absolute;">
	</div>
	<div class="wrapper">

		<div class="inner" style="position: absolute">
			<form  id="formtambahdatamhs">
				<h3>Layanan Aspirasi dan Pengaduan Online Rakyat</h3>
				<hr style="margin-bottom: 20px;">
				<div class="form-wrapper">
					<label for="">Judul laporan</label>
					<input type="text" id="judul" name="judul" class="form-control">
				</div>
				<div class="form-wrapper">
					<label for="">Isi Laporan</label>
					<textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
				</div>
				<div class="form-wrapper">
					<label for="">Tanggal Kejadian</label>
					<input type="date" id="tgl" name="tgl" class="form-control">
				</div>
				<div class="form-wrapper">
					<label for="">Lokasi Kejadian</label>
					<select class="form-control" id="lok" name="lok">
						<option value="">Select Category</option>
					<?php
					foreach ($listKota as $kota) {
						?>
						<option value="<?php echo "Kota : ". $kota->nama; ?>">
							
						<?php echo "Kota : ". $kota->nama; ?>

					</option>
						<?php
					}
					?> -->
						
					</select>
				</div>
				<div class="form-wrapper">
					<label for="">Instansi Kejadian</label>
					<select class="form-control" id="instansi" name="instansi">
						<option value="">Select Category</option>
						<?php
						foreach ($listKota as $kota) {
							?>
							<option value="<?php echo "Pemerintah Kota : ". $kota->nama; ?>">
								
							<?php echo "Pemerintah Kota : ". $kota->nama; ?>

						</option>
							<?php
						}
					?> -->
						
					</select>
				</div>
				<div class="form-wrapper">
					<label for="">Kategori</label>
					<select class="form-control" id="kategori" name="kategori">
						<option></option>
						<option>Tindak Pidana</option>
						<option>Kesehatan</option>
						<option>Bantuan</option>
					</select>
				</div>
				<div class="form-wrapper">
					<label for="">File</label>
					<input type="file" class="form-control-file" id="file" name="file">
				</div>
				<input type="hidden" name="action" class="btn btn-success" value="Add" />
				<button type="submit" value="Add">Kirim Laporan</button>
			</form>
			<a href="<?php echo site_url('sistem/logout');?>"><button class="log" style="margin-right:2px;"
					type="submit">Logout</button></a>
		</div>
	</div>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.all.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<script>
$(document).ready(function () {
        // ini adalah fungsi untuk mengambil data mahasiswa dan di  incluce ke dalam datatable
          var datamahasiswa = $('#tableUser').DataTable({
                  "processing": true,
                  "ajax": "<?=base_url("index.php/sistem/datamahasiswa")?>",
                  stateSave: true,
                  "order": []
          });
            
			// Tambah barang
		$(document).on('submit', '#formtambahdatamhs', function(event) {
			event.preventDefault();
			var judul = $('#judul').val(); // diambil dari id nama yang ada diform modal
			var isi = $('#isi').val(); // diambil dari id alamat yanag ada di form modal 
			var tgl = $('#tgl').val();
			var lok = $('#lok').val();
			var instansi = $('#instansi').val();
			var kategori = $('#kategori').val();
			var extension = $('#file').val().split('.').pop().toLowerCase();
			if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
				alert("Invalid Image");
				$('#file').val('');
				return false;
			}

			if (judul != '' && isi != '' && tgl != '' && lok != '' && instansi != '' && kategori != '') {
				$.ajax({
					type: "post",
					url: "<?= base_url("index.php/sistem/addData") ?>",
					beforeSend: function() {
						swal({
							title: 'Menunggu',
							html: 'Memproses data',
							onOpen: () => {
								swal.showLoading()
							}
						})
					},

					data: new FormData(this),
					contentType: false,
					processData: false,
					success: function() {
						swal({
							type: 'success',
							title: 'Tambah Barang',
							text: 'Anda Berhasil Menambah Barang'
						})
						$('#formtambahdatamhs')[0].reset();
						$('#addModal').modal('hide');
						// datalelang.ajax.reload(null, false);
					},
				});
			} else {
				Swal.fire({
					type: 'error',
					title: 'Oops...',
					text: 'Bother fields are required!',
				});
			}
		});
          

      });

</script>

</html>