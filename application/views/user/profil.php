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
		<div>
			<center><h4>PROFIL AINUL HAMDANI</h4></center>
			<img class="profimg" src="" width="150" height="200">
			<div class="card informasi">
				<h5>INFORMASI DATA DIRI</h5>
				<table>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td>hamdani.ainul@gmail.com</td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>Ainul Hamdani</td>
					</tr>
					<tr>
						<td>Nama Panggilan</td>
						<td>:</td>
						<td>Dani</td>
					</tr>
					<tr>
						<td>Nomor KTP</td>
						<td>:</td>
						<td>5201080607920001</td>
					</tr>
					<tr>
						<td>Nomor Induk Pegawai (Khusus PNS)</td>
						<td>:</td>
						<td></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>Laki-laki</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>Jurumapin</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>06 Juli 1992</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>Perumahan Pepabri Blok C No. 33 Perampuan</td>
					</tr>
					<tr>
						<td>Kabupaten/Kota</td>
						<td>:</td>
						<td>KAB. LOMBOK BARAT</td>
					</tr>
					<tr>
						<td>Kode Pos</td>
						<td>:</td>
						<td>83361</td>
					</tr>
					<tr>
						<td>Handphone</td>
						<td>:</td>
						<td>6281916029525</td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td>:</td>
						<td></td>
					</tr>
					<tr>
						<td>Status Menikah</td>
						<td>:</td>
						<td>Menikah</td>
					</tr>
					<tr>
						<td>Jenis Pekerjaan</td>
						<td>:</td>
						<td>Swasta</td>
					</tr>
				</table>
			</div>
			<div class="card informasi">
				<h5>INFORMASI PENDIDIKAN</h5>
				<table>
					<tr>
						<td>Universitas Asal</td>
						<td>:</td>
						<td>Universitas Mataram</td>
					</tr>
					<tr>
						<td>Prodi</td>
						<td>:</td>
						<td>Teknik Elektro</td>
					</tr>
					<tr>
						<td>IPK</td>
						<td>:</td>
						<td>3.57</td>
					</tr>
				</table>
			</div>
			<div class="card informasi">
				<h5>INFORMASI KELUARGA</h5>
				<table>
					<tr>
						<td>Nama Bapak</td>
						<td>:</td>
						<td>Ibrahim</td>
					</tr>
					<tr>
						<td>Pekerjaan Bapak</td>
						<td>:</td>
						<td>Ahli Professional</td>
					</tr>
					<tr>
						<td>Pendidikan Bapak</td>
						<td>:</td>
						<td>S2</td>
					</tr>
					<tr>
						<td>Pendapatan Bapak</td>
						<td>:</td>
						<td>Rp 4,000,000</td>
					</tr>
					<tr>
						<td>Alamat Bapak</td>
						<td>:</td>
						<td>Perum Perembun Asri Blok K5 Perampuan</td>
					</tr>
					<tr>
						<td>Tanggal Lahir Bapak</td>
						<td>:</td>
						<td>1963-06-08</td>
					</tr>
					<tr>
						<td>No Hp/Telepon Bapak</td>
						<td>:</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Nama Ibu</td>
						<td>:</td>
						<td>Latifa</td>
					</tr>
					<tr>
						<td>Pekerjaan Ibu</td>
						<td>:</td>
						<td>Tidak Bekerja</td>
					</tr>
					<tr>
						<td>Pendidikan Ibu</td>
						<td>:</td>
						<td>SMA</td>
					</tr>
					<tr>
						<td>Pendapatan Ibu</td>
						<td>:</td>
						<td>Rp 0</td>
					</tr>
					<tr>
						<td>Alamat Ibu</td>
						<td>:</td>
						<td>Perumahan Pepabri Blok C No. 33 Perampuan</td>
					</tr>
					<tr>
						<td>Tanggal Lahir Ibu</td>
						<td>:</td>
						<td>1967-06-14</td>
					</tr>
					<tr>
						<td>No Hp/Telepon Ibu</td>
						<td>:</td>
						<td></td>
					</tr>
					<tr>
						<td>Nama Suami/Istri</td>
						<td>:</td>
						<td>Haryani</td>
					</tr>
					<tr>
						<td>Pekerjaan Suami/Istri</td>
						<td>:</td>
						<td>Tidak Bekerja</td>
					</tr>
					<tr>
						<td>Pendidikan Suami/Istri</td>
						<td>:</td>
						<td>SMK</td>
					</tr>
					<tr>
						<td>Pendapatan Suami/Istri</td>
						<td>:</td>
						<td>Rp 0</td>
					</tr>
					<tr>
						<td>Alamat Suami/Istri</td>
						<td>:</td>
						<td>Perum Perembun Asri Blok K5 Perampuan</td>
					</tr>
					<tr>
						<td>Tanggal Lahir Suami/Istri</td>
						<td>:</td>
						<td>1991-05-12</td>
					</tr>
					<tr>
						<td>No Hp/Telepon Suami/Istri</td>
						<td>:</td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('user' . DIRECTORY_SEPARATOR . 'footer'); ?>