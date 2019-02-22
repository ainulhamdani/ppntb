
	<header class="blog-header py-3">
		<div class="row flex-nowrap justify-content-between align-items-center">
			<div class="col-4 text-center">
				<a class="blog-header-logo text-dark" href="<?php echo base_url() ?>">BEASISWA NTB</a>
			</div>
			<div class="col-4 d-flex justify-content-end align-items-center">
				<a class="btn btn-sm btn-outline-secondary" href="<?php echo base_url() ?>auth/logout">LOGOUT</a>
			</div>
		</div>
	</header>

	<div class="nav-scroller py-1 mb-2">
		<nav class="nav d-flex justify-content-md-center">
			<a class="p-2 text-muted <?=$this->uri->segment(2, "")==""?"active":"";?>" href="<?php echo base_url() ?>user">HOME</a>
			<a class="p-2 text-muted <?=$this->uri->segment(2, "")=="profil"?"active":"";?>" href="<?php echo base_url() ?>user/profil">PROFIL</a>
			<a class="p-2 text-muted <?=$this->uri->segment(2, "")=="daftar"?"active":"";?>" href="<?php echo base_url() ?>user/daftar">DAFTAR</a>
			<a class="p-2 text-muted <?=$this->uri->segment(2, "")=="status"?"active":"";?>" href="<?php echo base_url() ?>user/status">STATUS</a>
			<a class="p-2 text-muted <?=$this->uri->segment(2, "")=="history"?"active":"";?>" href="<?php echo base_url() ?>user/history">HISTORY</a>
		</nav>
	</div>
	<hr>