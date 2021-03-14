<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shorcut icon"  href="<?php echo base_url() ?>assets/stisla/assets/img/umk/favicon-16x16.png">
  <title><?=$title  ?> &mdash; <?=$si ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/stisla/node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/stisla/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/stisla/assets/css/components.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/stisla/assets/css/added.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header"><h4>Pendaftaran</h4></div>

              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nim">NIM</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-id-card"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control phone-number" name="nim">
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="nama">Nama Lengkap</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-user"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control phone-number" name="nama">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="form-group col-6">
                      <label class="form-label">Jenis Kelamin</label>
                      <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                          <input type="radio" name="transportation" value="Laki-Laki" class="selectgroup-input">
                          <span data-toggle="tooltip" data-placement="bottom" title="Laki Laki" class="selectgroup-button selectgroup-button-icon"><i class="fas fa-male"></i></span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="transportation" value="Perempuan" class="selectgroup-input" >
                          <span data-toggle="tooltip" data-placement="bottom" title="Perempuan" class="selectgroup-button selectgroup-button-icon"><i class="fas fa-female"></i></span>
                        </label>
                      </div>
                    </div>

                  <div class="form-group col-6">
                    <label for="alamat">Alamat</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-map-marked-alt"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control" name="alamat">
                        <div class="invalid-feedback">
                    </div>
                   </div>
                  </div>
                 </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                        <div class="input-group colorpickerinput">
                       <input id="password1" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="btn btn-default input-group-addon" onclick="showPassword1()"><i id="icon1" class="fa fa-eye-slash"></i></span>
                          </div>
                        </div>
                      </div>
                       <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                      </div>

                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Konfirmasi Password</label>
                      <div class="input-group colorpickerinput">
                        <input id="password2" type="password" class="form-control" name="password-confirm">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="btn btn-default input-group-addon" onclick="showPassword2()"><i id="icon2" class="fa fa-eye-slash"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; 2021 <div class="bullet"></div> Design By <a style="color: #1aa9f0;">CELTIC</a>
            </div>
          </div>
        </div>
      </div>
       </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/stisla/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?php echo base_url() ?>assets/stisla/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url() ?>assets/stisla/node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url() ?>assets/stisla/assets/js/scripts.js"></script>
  <script src="<?php echo base_url() ?>assets/stisla/assets/js/custom.js"></script>
  <script src="<?php echo base_url() ?>assets/stisla/assets/js/added.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url() ?>assets/stisla/assets/js/page/auth-register.js"></script>
</body>
</html>

