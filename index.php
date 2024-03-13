
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="./img/icct_favicon.ico">
    <title>Login</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"> ICCT Portal </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" style="margin-right: 70px;">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="announcement.php"> Announcement </a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"> Login </a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php"> Register </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-us.php"> About Us </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container d-flex justify-content-center align-items-center">
    <div class="row border rounded-2 p-3 bg-white shadow box-area">
      <div class="col-md-6 rounded-2 d-flex justify-content-center align-items-center flex-column left-box"
        style="background: #030067">
        <div class="featured-image mb-3">
          <img src="./img/icct_logo.png" class="img-fluid" />
        </div>
        <h2 style="color: #ececec;">Welcome to ICCTPortal</h2>
        <p style="color: #ececec;">We are happy to have you back.</p>
      </div>
      <div class="col-md-6 right-box">
        <div class="row align-items-center">
          <div class="header-text mb-4">
            <h2>Sign In</h2>
            <p>
              To access ICCT Portal, please make sure you meet the following
              requirements:
            </p>
          </div>
          <form action="/student-portal" method="POST">
            <label for="" class="form-label"> Email address </label>
            <div class="input-group mb-2">
              <input type="email" name="emailAddress" class="form-control bg-light fs-6"
                placeholder="example@example.com" />
            </div>
            <label for="" class="form-label"> Password </label>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control bg-light fs-6"
                placeholder="********" />
            </div>
            <div class="input-group mb-2">
              <button class="btn btn-lg w-100 fs-6" style="background-color: #030067; color: #ececec;">
                LogIn
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>