<?php $this->load->view('admin' . DIRECTORY_SEPARATOR . 'header'); ?>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">PPNTB</a>
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a class="nav-link" href="<?php echo base_url() ?>auth/logout">Sign out</a>
		</li>
	</ul>
</nav>

<div class="container-fluid">
	<div class="row">
		<?php $this->load->view('admin' . DIRECTORY_SEPARATOR . 'nav'); ?>

		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h1 class="h2">Dashboard</h1>
				<div class="btn-toolbar mb-2 mb-md-0">
				</div>
			</div>
		</main>
	</div>
</div>
<?php $this->load->view('admin' . DIRECTORY_SEPARATOR . 'footer'); ?>