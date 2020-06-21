<?php 


echo form_open(base_url('backend/tambah_satker'), 'class="form-horizontal"');;
 ?>


    1. Tulislah pada kolom pilihan dengan angka 1 atau 2 pada kolom pilihan dan tulislah alasan Anda memilih Peminatan/Jurusan tersebut. <br> 
	Angka 1 berarti pilihan PERTAMA, <br>
	Angka 2 berarti pilihan KEDUA<br>
	
<br><br>

<table class="table table-bordered">
        <thead>
        <tr>
            <th rowspan="3">Peminatan/Jurusan</th>
            <th rowspan="3">Mata Pelajaran (pilih salah satu per jurusan)</th>
            <th rowspan="3">Pilihan</th>
            <th rowspan="3">Alasan Memilih</th>
        </tr>
        </thead>
        <tbody>
        	<tr>
        		<td>MIPA</td>
        		<td>Matematika, Biologi, Fisika, Kimia </td>
        		<td><input type="" class="form-control" style="width: 50px" name="pil_mipa_1"></td>
        		<td><textarea class="form-control" name="alasan_mipa_1"></textarea></td>
        	</tr>
        	<tr>
        		<td>IPS</td>
        		<td>Geografi, Sejarah, Sosiologi dan Antropologi, Ekonomi </td>
        		<td><input type="" class="form-control" style="width: 50px" name="pil_ips_1"></td>
        		<td><textarea class="form-control" name="alasan_ips_1"></textarea></td>
        	</tr>
        </tbody>
</table>

<center>Pilihlah (√) mata pelajaran sejumlah 2 mata pelajaran Lintas Minat yang Anda pilih </center>
<br>
	<table class="table table-bordered">
    <tr>
        <td style="width: 150px">Yang memilih Peminatan</td>
        <td style="width: 250px">Mata Pelajaran Lintas Minat</td>
        <td>(√)</td>
        <td>Alasan Memilih</td>
    </tr>
    <tr>
        <td rowspan="2"> MIPA</td>
        <td> Ekonomi (pilihan)</td>
        <td> <input type="checkbox" value="1" name="check_eko"></td>
        <td><textarea style="width: 500px" name="alasan_eko" class="form-control"></textarea></td>
    </tr>
    <tr>
        <td> Geografi (pilihan)</td>
        <td> <input type="checkbox" value="1" name="check_geo"></td>
        <td><textarea style="width: 500px" name="alasan_geo" class="form-control"></textarea></td>
    </tr>

    <tr>
        <td rowspan="2"> IPS</td>
        <td> Biologi (pilihan)</td>
        <td> <input type="checkbox" value="1" name="check_bio"></td>
        <td><textarea style="width: 500px" name="alasan_bio" class="form-control"></textarea></td>
    </tr>
    <tr>
        <td> Fisika (pilihan)</td>
        <td> <input type="checkbox" value="1" name="check_fis"></td>
        <td><textarea style="width: 500px" name="alasan_fis" class="form-control"></textarea></td>
    </tr>
</table>


2. Minat mata pelajaran <br>
Tulislah 5 (lima) mata pelajaran yang disenangi (urutkan dari yang paling disenangi, dan tidak harus 5 mata pelajaran).

<table class="table table-bordered">
	 <tr>
        <td>No</td>
        <td>Nama Mata Pelajaran</td>
        <td>Alasan Disenangi</td>
    </tr>
     <tr>
        <td>1</td>
        <td><input type="" class="form-control" name="mapel1" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_mapel1" class="form-control"></textarea></td>
    </tr>
     <tr>
        <td>2</td>
        <td><input type="" class="form-control" name="mapel2" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_mapel2" class="form-control"></textarea></td>
    </tr>
      <tr>
        <td>3</td>
        <td><input type="" class="form-control" name="mapel3" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_mapel3" class="form-control"></textarea></td>
    </tr>
     <tr>
        <td>4</td>
        <td><input type="" class="form-control" name="mapel4" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_mapel4" class="form-control"></textarea></td>
    </tr>
      <tr>
        <td>5</td>
        <td><input type="" class="form-control" name="mapel5" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_mapel5" class="form-control"></textarea></td>
    </tr>
</table>



3. Minat pekerjaan <br>
Tulislah 5 (lima) jenis pekerjaan yang disenangi (urutkan dari yang paling disenangi dan tidak harus 5 jenis pekerjaan).

<table class="table table-bordered">
	 <tr>
        <td>No</td>
        <td>Nama Pekerjaan</td>
        <td>Alasan Disenangi</td>
    </tr>
     <tr>
        <td>1</td>
        <td><input type="" class="form-control" name="pekerjaan1" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_pekerjaan1" class="form-control"></textarea></td>
    </tr>
     <tr>
        <td>2</td>
        <td><input type="" class="form-control" name="pekerjaan2" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_pekerjaan2" class="form-control"></textarea></td>
    </tr>
      <tr>
        <td>3</td>
        <td><input type="" class="form-control" name="pekerjaan3" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_pekerjaan3" class="form-control"></textarea></td>
    </tr>
     <tr>
        <td>4</td>
        <td><input type="" class="form-control" name="pekerjaan4" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_pekerjaan4" class="form-control"></textarea></td>
    </tr>
      <tr>
        <td>5</td>
        <td><input type="" class="form-control" name="pekerjaan5" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_pekerjaan5" class="form-control"></textarea></td>
    </tr>
</table>

4. Minat studi lanjut ke Perguruan Tinggi <br>
Tulislah 5 (lima) nama program studi yang disenangi (urutkan dari yang paling disenangi dan tidak harus 5)

<table class="table table-bordered">
	 <tr>
        <td>No</td>
        <td>Nama Program Studi</td>
        <td>Alasan Disenangi</td>
    </tr>
     <tr>
        <td>1</td>
        <td><input type="" class="form-control" name="program_studi1" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_studi1" class="form-control"></textarea></td>
    </tr>
     <tr>
        <td>2</td>
        <td><input type="" class="form-control" name="program_studi2" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_studi2" class="form-control"></textarea></td>
    </tr>
      <tr>
        <td>3</td>
        <td><input type="" class="form-control" name="program_studi3" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_studi3" class="form-control"></textarea></td>
    </tr>
     <tr>
        <td>4</td>
        <td><input type="" class="form-control" name="program_studi4" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_studi4" class="form-control"></textarea></td>
    </tr>
      <tr>
        <td>5</td>
        <td><input type="" class="form-control" name="program_studi5" style="width: 250px"></td>
        <td><textarea style="width: 550px;" name="alasan_studi5" class="form-control"></textarea></td>
    </tr>
</table>

<div class="form-group col-md-12">
	<div class="col-md-12">
		<button class="btn btn-success btn-sm" name="submit" type="submit">
			<i class="fa fa-save"></i> Simpan
		</button>
	</div>
</div>

 <?php echo form_close(); ?> 
</body>
</html>