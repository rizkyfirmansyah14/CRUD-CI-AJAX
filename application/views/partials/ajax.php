<script>
	$(document).ready(function () {
		// ini adalah fungsi untuk mengambil data mahasiswa dan di  incluce ke dalam datatable
		var datamahasiswa = $('#tableUser').DataTable({
			"processing": true,
			"ajax": "<?=base_url("
			index.php / sistem / datamahasiswa ")?>",
			stateSave: true,
			"order": []
		});

		// Tambah barang
		$(document).on('submit', '#formtambahdata', function (event) {
			event.preventDefault();
			var nama = $('#nama').val(); // diambil dari id nama yang ada diform modal
			var email = $('#email').val(); // diambil dari id alamat yanag ada di form modal 
			var telp = $('#telp').val();
			var username = $('#username').val();
			var password = $('#password').val();

			if (nama != '' && email != '' && telp != '' && username != '' && password != '') {
				$.ajax({
					type: "post",
					url: "<?= base_url("
					index.php / sistem / addData2 ") ?>",
					beforeSend: function () {
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
					success: function () {
						swal({
							type: 'success',
							title: 'Tambah Data',
							text: 'Anda Berhasil Menambah Data'
						})
						$('#formtambahdata')[0].reset();
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

	//  homs

	
	

</script>