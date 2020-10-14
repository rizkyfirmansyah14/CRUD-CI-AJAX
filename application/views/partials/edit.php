<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="formedit" method="post">
					<div class="modal-body">
					<div class="form-group">
						<label>id Pengaduan</label>
						<input type="text" class="form-control" name="id" id="idp">
					</div>
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" id="judul" class="form-control"
								placeholder="Enter Name Goods">
						</div>
						<div class="form-group">
							<label>Isi</label>
							<input type="text" name="isi" id="isi" class="form-control"
								placeholder="Enter Price Goods">
						</div>
						<div class="form-group">
							<label>Tanggal</label>
								<input type="date" name="tgl" id="tgl" class="form-control"
								placeholder="">
						</div>
						<div class="form-group">
							<label>Lokasi</label>
							<select class="custom-select drpdw" name="lokasi" id="lokasi">
								<option selected>Select Category</option>
								<option value="Jawa Barat">Jawa Barat</option>
								<option value="Jawa Timur">Jawa Timur</option>
								<option value="Jawa Tengah">Jawa Tengah</option>
							</select>
						</div>
						<div class="form-group">
							<label>Instansi</label>
							<select class="custom-select drpdw" name="instansi" id="instansi">
								<option selected>Select Category</option>
								<option>Pemerintah Kota Bogor</option>
								<option>Pemerintah Kota Jakarta</option>
								<option>Pemerintah Kota Depok</option>
							</select>
						</div>
						<div class="form-group">
							<label>Kategori</label>
							<select class="custom-select drpdw" name="kategori" id="kategori">
								<option selected>Select Category</option>
								<option>Tindak Pidana</option>
								<option>Kesehatan</option>
								<option>Bantuan</option>
							</select>
						</div>
						<div class="form-group">
							<label>File</label>
							<input type="file" name="file" id="file" class="form-control">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<input type="hidden" name="id_barang" id="id_barang" class="btn btn-success" value="" />
						<input type="hidden" name="action" class="btn btn-success" value="Edit" />
						<input type="submit" value="Edit" name="action" class="btn btn-success" />
					</div>
				</form>
			</div>
		</div>
	</div>
