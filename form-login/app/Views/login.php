



<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            

            <div class="card card-primary">
            <br>  
            <div class="login-brand">
              <img src="../assets/img/userlog.png" alt="logo" width="100" class="shadow-light rounded-circle">
              <br>   
                <p><h2>login</h2></P>
            </div>
            
 
          <?php if (session()->get('msg')) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <strong><?= session()->getFlashdata('msg'); ?> </strong>
              </div>
          <?php endif; ?>


          <?php if (session()->get('message')) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <strong><?= session()->getFlashdata('message'); ?> </strong>
              </div>
          <?php endif; ?>

              <div class="card-body">
                <form action="<?= site_url('user/login') ?>"
                 method="POST" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Masukkan Email!
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Lupa Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Masukkan Password!
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Ingatkan Saya</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                  <div class="mt-5 text-muted text-center">
              Belum punya akun? <a href="<?= base_url('user/register') ?>">Buat Akun</a>
            </div>
                </form>
                <div class="row sm-gutters">
            
                </div>

              </div>
            </div>
          
            <div class="simple-footer">
              Copyright &copy; Form-Login CI-4 2020
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

 