<?
use App\Core\Sessions;

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HIND</title>
  <link rel="shortcut icon" type="image/png" href="App/Views/layouts/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="App/Views/layouts/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="App/Views/layouts/assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <form method="POST" action="?url=ResgisterController/handleRegister">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                      aria-describedby="emailHelp">
                    <?php if (isset($_SESSION['email'])): ?>
                      <p style="color: #DC143C;">
                        <?php echo Sessions::display_session('email'); ?>
                      </p>
                    <?php endif; ?>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    <?php if (isset($_SESSION['password'])): ?>
                      <p style="color: #DC143C;">
                        <?php echo Sessions::display_session('password'); ?>
                      </p>
                    <?php endif; ?>
                  </div>
                  <div class="mb-3">
                    <label for="lregisterInputname1" class="form-label">Họ và tên</label>
                    <input type="text" name="username" class="form-control" id="exampleInputtext1"
                      aria-describedby="textHelp">
                    <?php if (isset($_SESSION['username'])): ?>
                      <p style="color: #DC143C;">
                        <?php echo Sessions::display_session('username'); ?>
                      </p>
                    <?php endif; ?>
                  </div>
                  <button type="submit" name="register" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Đăng ký</button>
                  <div class="d-flex align-items-center justify-content-center">  
                    <a class="text-primary fw-bold ms-2" href="?url=LoginController/loadViewLogin">Đăng nhập</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="App/Views/layouts/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="App/Views/layouts/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>