
<?php
session_start();

if(@$_SESSION['id_admin'] != ''){
  header("Location:admin/dashboard.php");
} elseif (@$_SESSION['id_kariyawan'] != '') {
  header("Location:kariyawan/dashboard.php");
}

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Password Kariyawan</title>

  <?php include("css.php"); ?>
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="../index.php">
        <img src="../vendor/images/white.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.html">
                <img src="../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item">
          <a href="login.html" class="nav-link">
          <span class="nav-link-inner--text">Login</span>
        </a>
      </li> -->
      <!-- <li class="nav-item">
      <a href="register.html" class="nav-link">
      <span class="nav-link-inner--text">Register</span>
    </a>
  </li> -->
</ul>
</div>
</div>
</nav>
<!-- Main content -->
<div class="main-content">
  <!-- Header -->
  <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
    <div class="container">
      <div class="header-body text-center mb-7">
        <div class="row justify-content-center">
            <!-- kosong -->
        </div>
      </div>
    </div>
  </div>

  <!-- Page content -->
  <div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary border-0 mb-0">
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <small>UBAH PASSWORD</small>
            </div>
            <form role="form" action="../backend/lupa_password/ubah_password.php" method="post">
              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" placeholder="Password" type="password" name="password1">
                </div>
              </div>
              <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" placeholder="Verify Password" type="password" name="password2">
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-primary my-4">Ubah Password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("js.php"); ?>
</body>

</html>
