

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
           

            <div class="card card-primary">
            <div class="login-brand">
          <P><h2>Registrasi</h2></p>
            </div>

              <div class="card-body">
              
                <form action="<?= site_url('user/regis') ?>"
                method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="namadpn">Nama Depan</label>
                      <input id="namadpn" type="text" class="form-control" name="namadpn" required autofocus>
                      <div class="invalid-feedback">
                      please fill in your password
                    </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="namablkng">Nama Belakang</label>
                      <input id="namablkng" type="text" class="form-control" name="namablkng" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Konfirmasi Password</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm" required>
                    </div>
                  </div>

                

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                      <label class="custom-control-label" for="agree">Saya setuju dengan persyaratan dan kebijakan</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Registrasi
                    </button>
                  </div>
                </form>
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

  