<?php $this->load->view('auth' . DIRECTORY_SEPARATOR . 'header'); ?>
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo.svg" class="brand_logo" alt="Logo"></a>
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
            <div class="d-flex justify-content-center links">
            You are successfully registered, please login.
          </div>
        </div>
        <div class="d-flex justify-content-center mt-3 login_container">
          <a href="<?php echo base_url() ?>auth/login" class="btn login_btn">LOGIN</a>
        </div>
      </div>
    </div>
  </div>

<?php $this->load->view('auth' . DIRECTORY_SEPARATOR . 'footer'); ?>