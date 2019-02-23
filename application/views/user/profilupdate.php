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
		<form method="post" enctype='multipart/form-data' action="<?php echo base_url() ?>user/profilupdate">
			<center><h4>UPDATE PROFIL</h4></center>
			<div class="profimg">
				<img src="<?php echo base_url()."assets/img/foto/".$data->foto."?".$data->foto_updated ?>" width="150" height="200">
				<br>
				<input type="file" name="foto" style="width: 150px;">
				<br>
				<span style="font-size:12px"><center>Max image size is 250Kb</center></span>
			</div>
			<div class="card informasi">
				<h5>INFORMASI DATA DIRI</h5>
				<table>
					<tr>
						<td width="35%">Email</td>
						<td width="2%">:</td>
						<td><input class="form-control" type="text" name="" value="<?=$email?>" disable readonly></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="nama_lengkap" value="<?=$data->nama_lengkap?>"></td>
					</tr>
					<tr>
						<td>Nama Panggilan</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="nama_panggilan" value="<?=$data->nama_panggilan?>"></td>
					</tr>
					<tr>
						<td>Nomor KTP</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="no_ktp" value="<?=$data->no_ktp?>"></td>
					</tr>
					<tr>
						<td>Nomor Induk Pegawai (Khusus PNS)</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="no_nip" value="<?=$data->no_nip?>"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="jk" value="<?=$data->jk?>"></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="tempat_lahir" value="<?=$data->tempat_lahir?>"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="tanggal_lahir" value="<?=$data->tanggal_lahir?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="alamat" value="<?=$data->alamat?>"></td>
					</tr>
					<tr>
						<td>Kabupaten/Kota</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="kab_kota" value="<?=$data->kab_kota?>"></td>
					</tr>
					<tr>
						<td>Kode Pos</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="kode_pos" value="<?=$data->kode_pos?>"></td>
					</tr>
					<tr>
						<td>Handphone</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="handphone" value="<?=$data->handphone?>"></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="telepon" value="<?=$data->telepon?>"></td>
					</tr>
					<tr>
						<td>Status Menikah</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="status_nikah" value="<?=$data->status_nikah?>"></td>
					</tr>
					<tr>
						<td>Jenis Pekerjaan</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="pekerjaan" value="<?=$data->pekerjaan?>"></td>
					</tr>
				</table>
			</div>
			<div class="card informasi">
				<h5>INFORMASI PENDIDIKAN</h5>
				<table>
					<tr>
						<td width="30%">Universitas Asal</td>
						<td width="2%">:</td>
						<td><input class="form-control" type="text" name="universitas" value="<?=$data->universitas?>"></td>
					</tr>
					<tr>
						<td>Prodi</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="prodi" value="<?=$data->prodi?>"></td>
					</tr>
					<tr>
						<td>IPK</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="ipk" value="<?=$data->ipk?>"></td>
					</tr>
				</table>
			</div>
			<div class="card informasi">
				<h5>INFORMASI KELUARGA</h5>
				<table>
					<tr>
						<td width="30%">Nama Bapak</td>
						<td width="2%">:</td>
						<td><input class="form-control" type="text" name="nama_bapak" value="<?=$data->nama_bapak?>"></td>
					</tr>
					<tr>
						<td>Pekerjaan Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="pekerjaan_bapak" value="<?=$data->pekerjaan_bapak?>"></td>
					</tr>
					<tr>
						<td>Pendidikan Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="pendidikan_bapak" value="<?=$data->pendidikan_bapak?>"></td>
					</tr>
					<tr>
						<td>Pendapatan Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="pendapatan_bapak" value="<?=$data->pendapatan_bapak?>"></td>
					</tr>
					<tr>
						<td>Alamat Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="alamat_bapak" value="<?=$data->alamat_bapak?>"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="tl_bapak" value="<?=$data->tl_bapak?>"></td>
					</tr>
					<tr>
						<td>No Hp/Telepon Bapak</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="no_hp_bapak" value="<?=$data->no_hp_bapak?>"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Nama Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="nama_ibu" value="<?=$data->nama_ibu?>"></td>
					</tr>
					<tr>
						<td>Pekerjaan Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="pekerjaan_ibu" value="<?=$data->pekerjaan_ibu?>"></td>
					</tr>
					<tr>
						<td>Pendidikan Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="pendidikan_ibu" value="<?=$data->pendidikan_ibu?>"></td>
					</tr>
					<tr>
						<td>Pendapatan Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="pendapatan_ibu" value="<?=$data->pendapatan_ibu?>"></td>
					</tr>
					<tr>
						<td>Alamat Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="alamat_ibu" value="<?=$data->alamat_ibu?>"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="tl_ibu" value="<?=$data->tl_ibu?>"></td>
					</tr>
					<tr>
						<td>No Hp/Telepon Ibu</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="no_hp_ibu" value="<?=$data->no_hp_ibu?>"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Nama Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="nama_pasangan" value="<?=$data->nama_pasangan?>"></td>
					</tr>
					<tr>
						<td>Pekerjaan Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="pekerjaan_pasangan" value="<?=$data->pekerjaan_pasangan?>"></td>
					</tr>
					<tr>
						<td>Pendidikan Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="pendidikan_pasangan" value="<?=$data->pendidikan_pasangan?>"></td>
					</tr>
					<tr>
						<td>Pendapatan Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="pendapatan_pasangan" value="<?=$data->pendapatan_pasangan?>"></td>
					</tr>
					<tr>
						<td>Alamat Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="alamat_pasangan" value="<?=$data->alamat_pasangan?>"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="tl_pasangan" value="<?=$data->tl_pasangan?>"></td>
					</tr>
					<tr>
						<td>No Hp/Telepon Suami/Istri</td>
						<td>:</td>
						<td><input class="form-control" type="text" name="no_hp_pasangan" value="<?=$data->no_hp_pasangan?>"></td>
					</tr>
				</table>
				<br>
				<button type="submit" class="btn btn-primary mb-2">Simpan</button>
			</div>
		</form>
	</div>
</div>
<?php $this->load->view('user' . DIRECTORY_SEPARATOR . 'footer'); ?>