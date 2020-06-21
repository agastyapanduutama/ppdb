<?php 


echo form_open(base_url('backend/tambah_satker'), 'class="form-horizontal"');;
 ?>


<div class="row">
<div class="col-md-6">
	D. KETERANGAN PENDIDIKAN SEBELUMNYA
	<div class="form-group">
		<label class="col-md-12 control-label">23. Asal SLTP<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="asal_sltp" class="form-control"  required>
		</div>
	</div>

	  <div class="form-group">
			<div class="row">
				<div class="col-md-6">a. Tanggal dan No. Ijazah SLTP</div>
				<div class="col-md-6">
					<input type="text" name="tanggal_ijazah" class="form-control"  required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">b. Tanggal dan No. STTB SLTP</div>
				<div class="col-md-6">
					<input type="text" name="tanggal_sttb" class="form-control"  required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">c. Lama belajar</div>
				<div class="col-md-3">
					<input type="text" name="lama_belajar" class="form-control"  required>
				</div>
				<div class="col-md-3">Tahun</div>
			</div>
	  </div>

E.  KETERANGAN ORANG TUA KANDUNG :
	<div class="form-group">
		<label class="col-md-12 control-label">24. Nama Ayah<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="nama_ayah" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">25. Tempat/tanggal lahir <span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="ttl_a" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">26. Kewarganegaraan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="kewarganegaraan_a" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">27. Pendidikan terakhir<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="pendidikan_ta_a" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">30. Penghasilan/bulan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="penghasilan_a" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">31. Alamat <span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="alamat_a" class="form-control"  required>
		</div>
	</div>

<div class="form-group">
		<label class="col-md-12 control-label">32. Nama Ibu<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="nama_ibu" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">33. Tempat/tanggal lahir <span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="ttl_b" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">34. Kewarganegaraan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="kewarganegaraan_i" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">35. Pendidikan terakhir<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="pendidikan_ta_i" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">36. Penghasilan/bulan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="penghasilan_i" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">37. Alamat <span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="alamat_i" class="form-control"  required>
		</div>
	</div>

</div>






<div class="col-md-6">
	F. KETERANGAN TENTANG WALI
	<div class="form-group">
		<label class="col-md-12 control-label">38. Nama (Wali laki-laki)<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="nama_wali_l" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">39. Tempat/tanggal lahir<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="ttl_wali_l" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">40. Kewarganegaraan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="kewarganegaraan_w_l" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">41. Pendidikan terakhir<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="pendidikan_pw_l" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">42. Pekerjaan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="pekerjaan_w_l" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">43. Penghasilan/bulan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="penghasilan_w_l" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">44. Alamat <span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="alamat_w_l" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">45. Hubungan keluarga dengan siswa<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="hubungan_w_l" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">46. Nama (Wali Perempuan)<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="nama_wali_p" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">47. Tempat tanggal lahir<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="ttl_wali_p" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">48. Kewarganegaraan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="kewarganegaraan_w_p" class="form-control"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-12 control-label">49. Pendidikan terakhir<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="pendidikan_pw_p" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">50. Pekerjaan<span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="pekerjaan_w_p" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">51. Penghasilan/bulan <span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="penghasilan_w_p" class="form-control"  required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-12 control-label">52. Hubungan keluarga dengan siswa	 <span style="color: red">*</span></label>
		<div class="col-md-12">
			<input type="text" name="hubungan_w_p" class="form-control"  required>
		</div>
	</div>


	

<div class="form-group col-md-12">
	<div class="col-md-12">
		<button class="btn btn-success btn-sm" name="submit" type="submit">
			<i class="fa fa-save"></i> Selanjutnya
		</button>
	</div>
</div>

 <?php echo form_close(); ?> 
</body>
</html>