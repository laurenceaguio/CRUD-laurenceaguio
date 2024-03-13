
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"> HMS </a>
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
      </div>
      <div class="col-md-6 right-box">
        <div class="row align-items-center">
          <div class="header-text mb-4">
            <h2> Student Register</h2>
            <p> To register ICCT Portal, please make sure you meet the following requirements: </p>
          </div>
          <div>
            <form action="/student-register" method="POST">
              
              <div class="mb-2">
                <label for="labelFirstName" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name">
              </div>
              <div class="mb-2">
                <label for="labelMiddleName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" name="middleName" id="middleName" placeholder="Enter Middle Name">
              </div>
              <div class="mb-2">
                <label for="labelLastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name">
              </div>
                            <div class="mb-2">
                <label for="labelSuffux" class="form-label">Suffix</label>
                <select name="suffix" id="suffix" class="form-control bg-light">
                              <option value="">Suffix</option>
                              <option value="jr">Jr</option>
                              <option value="sr">Sr</option>
                              <option value="II">II</option>
                              <option value="III">III</option>
                              <option value="IV">IV</option>
                </select>
              </div>
              <div class="mb-2">
                <label for="labelEmailAddress" class="form-label">Email address</label>
                <input type="text" class="form-control" name="emailAddress" id="emailAddress" placeholder="example@example.com">
              </div>
              <div class="mb-2">
                <label for="labelContactNum" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="contactNum" id="contactNum" placeholder="09********">
              </div>


              <div class="mb-2">
                <button class="btn btn-lg w-100 fs-6" style="background-color: #030067; color: #ececec;"> Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>