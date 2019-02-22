<?php $this->load->view('public' . DIRECTORY_SEPARATOR . 'header'); ?>
<div class="container">
	<?php $this->load->view('public' . DIRECTORY_SEPARATOR . 'nav'); ?>

	<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url() ?>assets/img/cover.jpg" class="cover img-fluid" alt="Cover">
				<div class="container">
					<div class="carousel-caption">
						<p><a class="btn btn-lg btn-primary" href="<?php echo base_url() ?>auth/login" role="button">Daftar Sekarang</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url() ?>assets/img/poland.jpg" class="cover img-fluid" alt="Cover">
				<div class="container">
					<div class="carousel-caption">
						<p><a class="btn btn-lg btn-primary" href="<?php echo base_url() ?>auth/login" role="button">Daftar Sekarang</a></p>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
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