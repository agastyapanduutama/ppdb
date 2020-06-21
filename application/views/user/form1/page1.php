<?php 


echo form_open(base_url('backend/tambah_satker'), 'class="form-horizontal"');;
 ?>


<div class="row">
<div class="col-md-6">
	A. KETERANGAN PRIBADI
	<div class="form-group">
		<label class="col-md-12 control-label">1. Nama Lengkap<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="nama_lengkap" class="form-control"  required>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-12 control-label">2. Nama Panggilan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="nama_panggilan" class="form-control"  required>
		</div>
	</div>

	  <div class="form-group">
	  	<label class="col-md-12 control-label">3. Jenis Kelamin<span style="color: red">*</span></label>
	    <div class="form-check">
	      <input class="form-check-input" type="radio" value="0" name="jenis_kelamin">
	      <label class="form-check-label">laki-laki</label>
	    </div>
	    <div class="form-check">
	      <input class="form-check-input" type="radio" value="1" name="jenis_kelamin">
	      <label class="form-check-label">Perempuan</label>
	    </div>
	  </div>


	<div class="form-group">
		<label class="col-md-12 control-label">4. Tempat tanggal lahir<span style="color: red">*</span></label>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<input type="text" name="tempat_lahir" class="form-control"  required>
				</div>
				<div class="col-md-6">
					<input type="date" name="tanggal_lahir" class="form-control"  required>
				</div>
			</div>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-12 control-label">5. Agama<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="agama" class="form-control"  required>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-12 control-label">6. Kewarganegaraan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="kewarganegaraan" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">7. Anak berapa<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="anak_ke" class="form-control"  required>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-12 control-label">8. Jumlah Saudara Kandung<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="jumlah_sk" class="form-control"  required>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-12 control-label">9. Jumlah Saudara Tiri<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="jumlah_st" class="form-control"  required>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-12 control-label">10. Jumlah Saudara Angkat<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="jumlah_sa" class="form-control"  required>
		</div>
	</div>



	  <div class="form-group">
	  	<label class="col-md-12 control-label">11. Status<span style="color: red">*</span>
	    <div class="form-check">
	      <input class="form-check-input" type="radio" name="status">
	      <label class="form-check-label">Anak Yatim</label>
	    </div>
	    <div class="form-check">
	      <input class="form-check-input" type="radio" name="status">
	      <label class="form-check-label">Piatu</label>
	    </div> 
	    <div class="form-check">
	      <input class="form-check-input" type="radio" name="status">
	      <label class="form-check-label">Yatim Piatu </label>
	    </div>
	    <div class="form-check">
	      <input class="form-check-input" type="radio" name="status">
	      <label class="form-check-label">Tidak Yatim Piatu </label>
	    </div>
	  </div>

	<div class="form-group">
		<label class="col-md-12 control-label">13. Bahasa Sehari-hari<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="bahasa" class="form-control"  required>
		</div>
	</div>
</div>

<div class="col-md-6">
	B. KETERANGAN TEMPAT TINGGAL
	<div class="form-group">
		<label class="col-md-12 control-label">13. Alamat<span style="color: red">*</span></label>
		<div class="col-md-12">
			<textarea class="form-control" name="alamat"></textarea>
		</div>
	</div>


	<div class="form-group">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<label class="col-md-12 control-label">14. No Telp<span style="color: red">*</span></label>
					<input type="text" name="no_telp" class="form-control"  required>
				</div>
				<div class="col-md-6">
					<label class="col-md-12 control-label"><span>Kode Pos</span></label>
					<input type="number" name="kode_pos" class="form-control"  required>
				</div>
			</div>
		</div>
	</div>

	 <div class="form-group">
	  	<label class="col-md-12 control-label">15. Tempat tinggal tsb adalah<span style="color: red">*</span>
	    <div class="form-check">
	      <input class="form-check-input" type="radio" value="1" name="tempat_tinggal">
	      <label class="form-check-label">a. Pada Orang Tua Kandung</label>
	    </div>
	    <div class="form-check">
	      <input class="form-check-input" type="radio" value="2" name="tempat_tinggal">
	      <label class="form-check-label">b. Pada seseorang dengan hubungan keluarga</label>
	    </div> 
	    <div class="form-check">
	      <input class="form-check-input" type="radio" value="3" name="tempat_tinggal">
	      <label class="form-check-label">c. Menumpang pada orang lain / kost </label>
	    </div>
	  </div>

	  <div class="form-group">
				<label class="col-md-12 control-label">16. Jarak dari tempat tinggal ke Sekolah<span style="color: red">*</span></label>
			<div class="row">
				<div class="col-md-6">
					<input type="text" name="jarak_sekolah" class="form-control"  required>
				</div>
				<div class="col-md-6">KM</div>
			</div>
	  </div>


	<div class="form-group">
		<label class="col-md-12 control-label">17. Ke sekolah dengan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="ke_sekolah" class="form-control"  required>
		</div>
	</div>

	C. KETERANGAN KESEHATAN
	 <div class="form-group">
				<label class="col-md-12 control-label">18. Berat Badan<span style="color: red">*</span></label>
			<div class="row">
				<div class="col-md-6">
					<input type="text" name="berat_badan" class="form-control"  required>
				</div>
				<div class="col-md-6">KM</div>
			</div>
	  </div>

	 <div class="form-group">
				<label class="col-md-12 control-label">19. Tinggi Badan<span style="color: red">*</span></label>
			<div class="row">
				<div class="col-md-6">
					<input type="text" name="tinggi_badan" class="form-control"  required>
				</div>
				<div class="col-md-6">KM</div>
			</div>
	  </div>


	 <div class="form-group">
	  	<label class="col-md-12 control-label">20. Golongan darah	<span style="color: red">*</span>
	    <div class="form-check">
	      <input class="form-check-input" type="radio" value="A" name="gol_dar">
	      <label class="form-check-label">A</label>
	    </div>
	    <div class="form-check">
	      <input class="form-check-input" type="radio" value="B" name="gol_dar">
	      <label class="form-check-label">B</label>
	    </div> 
	    <div class="form-check">
	      <input class="form-check-input" type="radio" value="O" name="gol_dar">
	      <label class="form-check-label">O </label>
	    </div>
	    <div class="form-check">
	      <input class="form-check-input" type="radio" value="AB" name="gol_dar">
	      <label class="form-check-label">AB </label>
	    </div>
	  </div>

	<div class="form-group">
		<label class="col-md-12 control-label">21. Penyakit yang pernah diderita<span style="color: red">*</span></label>
		<div class="col-md-12">
			<textarea class="form-control" name="penyakit"></textarea>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-12 control-label">22. Kelainan Jasmani<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="kelainan" class="form-control"  required>
		</div>
	</div>

  </div>
</div>


<div class="form-group col-md-12">
	<div class="col-md-12">
		<button class="btn btn-success btn-sm" name="submit" type="submit">
			<i class="fa fa-save"></i> Page selanjutnya
		</button>
	</div>
</div>

 <?php echo form_close(); ?> 
</body>
</html>