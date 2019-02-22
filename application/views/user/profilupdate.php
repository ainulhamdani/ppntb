<?php $this->load->view('user' . DIRECTORY_SEPARATOR . 'header'); ?>
<div class="container">
	<?php $this->load->view('user' . DIRECTORY_SEPARATOR . 'nav'); ?>
	<div class="nav-collapse py-1 mb-2">
		<nav class="nav d-flex justify-content-md-center">
			<a class="p-2 text-muted <?=$this->uri->segment(3, "info")=="info"?"active":"";?>" href="<?php echo base_url() ?>user/profil/info">INFORMASI PROFIL</a>
			<a class="p-2 text-muted <?=$this->uri->segment(3, "")=="update"?"active":"";?>" href="<?php echo base_url() ?>user/profil/update">UPDATE INFORMASI PROFIL</a>
			<a class="p-2 text-muted <?=$this->uri->segment(3, "")=="password"?"active":"";?>" href="<?php echo base_url() ?>user/profil/password">GANTI PASSWORD</a>
		</nav>
	</div>
	<hr>
	<div class="row card">
		<form method="post">
			<center><h4>UPDATE PROFIL</h4></center>
			<img class="profimg" src="" width="150" height="200">
			<div class="card informasi">
				<h5>INFORMASI DATA DIRI</h5>
				<table>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Nama Panggilan</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Nomor KTP</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Nomor Induk Pegawai (Khusus PNS)</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Kabupaten/Kota</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Kode Pos</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Handphone</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Status Menikah</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Jenis Pekerjaan</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
				</table>
			</div>
			<div class="card informasi">
				<h5>INFORMASI PENDIDIKAN</h5>
				<table>
					<tr>
						<td>Universitas Asal</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Prodi</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>IPK</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
				</table>
			</div>
			<div class="card informasi">
				<h5>INFORMASI KELUARGA</h5>
				<table>
					<tr>
						<td>Nama Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Pekerjaan Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Pendidikan Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Pendapatan Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Alamat Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Tanggal Lahir Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>No Hp/Telepon Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Nama Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Pekerjaan Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Pendidikan Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Pendapatan Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Alamat Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Tanggal Lahir Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>No Hp/Telepon Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Nama Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Pekerjaan Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Pendidikan Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Pendapatan Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Alamat Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>Tanggal Lahir Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
					<tr>
						<td>No Hp/Telepon Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name=""></td>
					</tr>
				</table>
				<br>
				<button type="submit" class="btn btn-primary mb-2">Simpan</button>
			</div>
		</form>
	</div>
</div>
<?php $this->load->view('user' . DIRECTORY_SEPARATOR . 'footer'); ?>