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
          <form id="login" action="<?php echo base_url() ?>auth/signup" method="post">
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" name="fullname" class="form-control input_user" value="" placeholder="nama lengkap">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="text" name="identity" class="form-control input_user" value="" placeholder="email">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="password2" class="form-control input_pass" value="" placeholder="re-type password">
            </div>
          </form>
        </div>
        <div class="d-flex justify-content-center" id="infoMessage"><?php echo $message;?></div>
        <div class="d-flex justify-content-center mt-3 login_container">
          <button type="submit" form="login" name="button" class="btn login_btn">Sign Up</button>
        </div>
        <div class="mt-4">
          <div class="d-flex justify-content-center links">
            Already have an account? <a href="<?php echo base_url() ?>auth/login" class="ml-2">Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php $this->load->view('auth' . DIRECTORY_SEPARATOR . 'footer'); ?>