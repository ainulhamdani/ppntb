<?php $this->load->view('user' . DIRECTORY_SEPARATOR . 'header'); ?>
<div class="container">
	<?php $this->load->view('user' . DIRECTORY_SEPARATOR . 'nav'); ?>
	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
		<img src="<?php echo base_url() ?>assets/img/cover.jpg" class="cover img-fluid" alt="Cover">
	</div>

	<div class="row mb-2">
		<div class="col-md-6">
			<div class="card flex-md-row mb-4 shadow-sm h-md-250">
				<div class="card-body d-flex flex-column align-items-start">
					<strong class="d-inline-block mb-2 text-primary">Fully Funded</strong>
					<h3 class="mb-0">
						<a class="text-dark" href="#">Beasiswa Polandia</a>
					</h3>
					<p class="card-text mb-auto">*BEASISWA PUTRA/I NTB*

Kesempatan Beasiswa Studi ke Luar Negeri
*(Fully Funded)*

Gelombang pemberangkatan:
Batch 1: Oktober 2018 (Tujuan Polandia Saja)
Batch 2: Februari 2019
Batch 3: Oktober 2019</p>
					<a href="#">Continue reading</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card flex-md-row mb-4 shadow-sm h-md-250">
				<div class="card-body d-flex flex-column align-items-start">
					<strong class="d-inline-block mb-2 text-success">Fully Funded</strong>
					<h3 class="mb-0">
						<a class="text-dark" href="#">Beasiswa China</a>
					</h3>
					<p class="card-text mb-auto">*BEASISWA NTB tujuan China*

Kali ini tawaran Beasiswa untuk kuliah S1, S2, dan S3 di kampus-kampus terbaik di China untuk putra/I terbaik NTB.

*“Tuntutlah Ilmu itu walaupun sampai ke Negeri China”*.</p>
					<a href="#">Continue reading</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('user' . DIRECTORY_SEPARATOR . 'footer'); ?>