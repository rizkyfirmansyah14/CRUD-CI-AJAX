<script>
	$(document).ready(function () {
		// ini adalah fungsi untuk memunculkan modal
		// ini adalah fungsi untuk memunculkan data di datatable
		var datalelang = $('#dataLelang').DataTable({
			"processing": true,
			"ajax": "<?= base_url("index.php/sistem/dataBarang") ?>",
			"order": [],
		});


		// Edit barang
		$(document).on('submit', '#formedit', function (event) {
			event.preventDefault();
			var id = $('#id').val();
			var judul = $('#judul').val();
			var isi = $('#isi').val();
			var tgl = $('#tgl').val();
			var lok = $('#lok').val();
			var instansi = $('#instansi').val();
			var kategori = $('#kategori').val();
			var extension = $('#file').val().split('.').pop().toLowerCase();
			if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
				alert("Invalid Image");
				$('#image').val('');
				return false;
			}

			if (judul != '' && isi != '' && tgl != '' && lok != '' && instansi != '' && kategori != '') {
				$.ajax({
					type: "post",
					url: "<?= base_url("index.php/sistem/editData") ?>",
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
							title: 'Edit Barang',
							text: 'Anda Berhasil Mengedit Barang'
						})
						$('#formedit')[0].reset();
						$('#editModal').modal('hide');
						datalelang.ajax.reload(null, false);
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.responseText);
					}
				});
			} else {
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Bother fields are required!',
				});
			}
		});

		// Get Barang
		$(document).on('click', '.editbtn', function () {
			// console.log("lsadjlaskdjaskldj")
			var id_barang = $(this).attr("id");
			$.ajax({
				url: "<?= base_url("index.php/sistem/getIdBarang") ?>",
				type: "post",
				data: {
					id_p: id_barang
				},
				dataType: "JSON",
				success: function (data) {
					$('#editModal').modal('show');
					$('#idp').val(id_barang);
					$('#id_barang').val(id_barang);
					$('#judul').val(data.judul_p);
					$('#isi').val(data.isi_p);
					$('#tgl').val(data.tgl_p);
					$('#lokasi').val(data.lokasi_p);
					$('#instansi').val(data.instansi_p);
					$('#kategori').val(data.kategori_p);
					$('#file').val(data.file_p);
				},
				error: function (xhr, ajaxOptions, thrownError) {
					console.log(xhr.responseText);
				}
			});
		});

		// Delete Barang
		$(document).on('click', '.deletebtn', function () {
			var id_barang = $(this).attr("id");
			swal({
				title: 'Konfirmasi',
				text: "Apakah anda yakin ingin menghapus ",
				type: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Hapus',
				confirmButtonColor: '#d33',
				cancelButtonColor: '#3085d6',
				cancelButtonText: 'Tidak',
				reverseButtons: true
			}).then((result) => {
				if (result.value) {
					$.ajax({
						url: "<?= base_url('index.php/sistem/deleteBarang') ?>",
						type: "post",
						beforeSend: function () {
							swal({
								title: 'Menunggu',
								html: 'Memproses data',
								onOpen: () => {
									swal.showLoading()
								}
							})
						},
						data: {
							id_p: id_barang
						},
						success: function (data) {
							swal(
								'Hapus',
								'Berhasil Terhapus',
								'success'
							)
							datalelang.ajax.reload(null, false)
						}
					});
				} else if (result.dismiss === swal.DismissReason.cancel) {
					swal(
						'Batal',
						'Anda membatalkan penghapusan',
						'error'
					)
				};
			});

		});
	});
</script>