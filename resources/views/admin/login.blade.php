<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="Admin Email List"/>
    <meta name="description" content="Admin Email List"/>
    <meta name="robots" content="noindex,nofollow" />
    <title>Admin Email List</title>
    <link rel="icon" type="image/png" sizes="16x16" href="matrixadmin/assets/images/favicon.png"/>
    <link href="matrixadmin/dist/css/style.min.css" rel="stylesheet" />
  </head>

  <body>
    <div class="main-wrapper">
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
      <div class=" auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
        <div class="auth-box bg-dark border-top border-secondary">
          <div id="loginform">
            <div class="text-center pt-3 pb-3">
              <span class="db"
                ><img src="matrixadmin/assets/images/logo.png" alt="logo"
              /></span>
            </div>
            <form class="form-horizontal mt-3" id="loginform" action="" method="POST">
                @csrf
              <div class="row pb-4">
                <div class="col-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1">
                            <i class="mdi mdi-account fs-4"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control form-control-lg" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" required="" oninvalid="this.setCustomValidity('Bạn chưa nhập Email')" oninput="this.setCustomValidity('')"/>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                            <i class="mdi mdi-lock fs-4"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="" oninvalid="this.setCustomValidity('Bạn chưa nhập Password')" oninput="this.setCustomValidity('')"/>
                  </div>
                </div>
              </div>
              <div class="row border-top border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="pt-3">
                      <button class="btn btn-success float-end text-white" type="submit">
                        Login
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="matrixadmin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="matrixadmin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      $(".preloader").fadeOut();
      $("#to-recover").on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
      });
      $("#to-login").click(function () {
        $("#recoverform").hide();
        $("#loginform").fadeIn();
      });
    </script>
  </body>
</html>
