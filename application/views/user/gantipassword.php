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
		<h1><?php echo lang('change_password_heading');?></h1>

		<div id="infoMessage"><?php echo $message;?></div>

		<?php echo form_open("auth/change_password");?>

		      <p>
		            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
		            <?php echo form_input($old_password);?>
		      </p>

		      <p>
		            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
		            <?php echo form_input($new_password);?>
		      </p>

		      <p>
		            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
		            <?php echo form_input($new_password_confirm);?>
		      </p>

		      <?php echo form_input($user_id);?>
		      <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

		<?php echo form_close();?>

	</div>
</div>
<?php $this->load->view('user' . DIRECTORY_SEPARATOR . 'footer'); ?>