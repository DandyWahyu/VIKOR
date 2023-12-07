<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="0qnIGzWMqxAV9smpQ2x6i7Z07gjEDU8Dkb1gRjXg">
  <title>Aplikasi Sistem Pendukng Keputusan Penilaian Guru Terbaik</title>
  <link rel="apple-touch-icon" sizes="76x76" href="https://wfhlitbang.kemdikbud.go.id/material/img/apple-icon.png">
  <!-- <link rel="icon" href="https://wfhlitbang.kemdikbud.go.id/material/img/favicon.ico"> -->
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.css" />
  <link href="https://wfhlitbang.kemdikbud.go.id/material/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <style type="text/css">
    .sorting_asc:before,
    .sorting_asc:after,
    .sorting_desc:before,
    .sorting_desc:after,
    .sorting:before,
    .sorting:after {
      font-size: small;
    }

    .dt-buttons.btn-group.flex-wrap {
      justify-content: center;
      width: 100%;
    }

    .btn.btn-secondary.buttons-html5 {
      padding: 12px 12px;
    }

    .btn.btn-sm.btn-icon {
      padding: 0.4rem;
    }

    /* Let's get this party started */
    ::-webkit-scrollbar {
      width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: rgba(0, 0, 0, 0.1);
      -webkit-border-radius: 10px;
      border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      -webkit-border-radius: 10px;
      border-radius: 10px;
      background: rgba(0, 0, 0, 0.3);
    }

    ::-webkit-scrollbar-thumb:window-inactive {
      background: rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body class="off-canvas-sidebar">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href=""></a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <!-- <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a href="login.php" class="nav-link">
              <i class="material-icons">fingerprint</i> Login
            </a>
          </li>
        </ul>
      </div> -->
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('https://wfhlitbang.kemdikbud.go.id/material/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container" style="height: auto;">
        <div class="row align-items-center">
          <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
            <h3>Penilaian Kinerja Guru</h3>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <?php if ($_POST) include 'aksi.php'; ?>
            <form class="form" action="aksi.php?act=login" method="post">
              <input type="hidden" name="_token" value="0qnIGzWMqxAV9smpQ2x6i7Z07gjEDU8Dkb1gRjXg">
              <div class="card card-login card-hidden mb-3">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title"><strong>Login</strong></h4>
                </div>
                <div class="card-body">
                  <div class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="text" name="user" class="form-control" placeholder="Akun..." value="" required>
                    </div>
                  </div>
                  <div class="bmd-form-group mt-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" name="pass" id="password" class="form-control" placeholder="Password..." value="" required>
                    </div>
                  </div>
                  <!-- <div class="form-check mr-auto ml-3 mt-5">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember"> Simpan Login
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div> -->
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-primary btn-link btn-lg">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <style>
        @media screen and (max-width: 767px) {
          .off-canvas-sidebar .navbar.navbar-transparent {
            padding-top: 0 !important;
          }

          .off-canvas-sidebar .wrapper-full-page .page-header {
            padding: 0 !important;
          }

          .login-page .container {
            padding-top: 25px !important;
          }
        }
      </style>
      <footer class="footer">
        <div class="container justify-content-center">
          <div class="copyright">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Penilaian Kinerja Guru
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="https://wfhlitbang.kemdikbud.go.id/material/js/core/jquery.min.js"></script>
  <script src="https://wfhlitbang.kemdikbud.go.id/material/js/core/popper.min.js"></script>
  <script src="https://wfhlitbang.kemdikbud.go.id/material/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://wfhlitbang.kemdikbud.go.id/material/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="https://wfhlitbang.kemdikbud.go.id/material/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="https://wfhlitbang.kemdikbud.go.id/material/js/plugins/sweetalert2.js"></script>
  <!--  Plugin for Datatables -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="https://wfhlitbang.kemdikbud.go.id/material/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
</body>

</html>