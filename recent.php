<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/stylePriority.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <header>
    <h>Đã Xem Gần Đây</h>
  </header>
  <div class="container-">
    <nav class="navbar navbar-expand-lg" id="navbar1">
      <div class="container-fluid">
        <img src="./CSS/images/logo.jpg" height="50px" width="50px" style="border-radius: 50px;">
        <a class="navbar-brand" href="index.php" style="padding-left: 50px;color: rgb(66, 72, 116);">Trang Chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- <ul class="navbar-nav">
                  <li class="nav-item"></li>
                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                  </li>
                  <li class="nav-item"></li>
                    <a class="nav-link" href="#">Link</a>
                  </li>
                </ul> -->
          <form class="d-flex" role="search" style="width: 60%; padding-left:10%;">
            <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Tìm</button>
          </form>
          <ul style="padding-left: 25%">
            <li class="nav-item dropdown" id="login">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tài khoản
              </a>
              <ul class="dropdown-menu" id="dropdownLogin">
                <li><a class="dropdown-item" href="#">Xem và chỉnh sửa thông tin cá nhân</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Đăng kí</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="container-fluid" id="container">
    <div class="row">
      <div class="col-lg-2 col-md-4">
        <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px; z-index: 2">
          <img src="./CSS/images/folder.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(118, 159, 205); border:none;">Xem</a>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(235, 29, 54); border:none;">Xóa</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4">
        <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px; z-index: 2">
          <img src="./CSS/images/folder.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(118, 159, 205); border:none;">Xem</a>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(235, 29, 54); border:none;">Xóa</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4">
        <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px; z-index: 2">
          <img src="./CSS/images/folder.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(118, 159, 205); border:none;">Xem</a>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(235, 29, 54); border:none;">Xóa</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4">
        <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px; z-index: 2">
          <img src="./CSS/images/folder.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(118, 159, 205); border:none;">Xem</a>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(235, 29, 54); border:none;">Xóa</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4">
        <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px; z-index: 2">
          <img src="./CSS/images/folder.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(118, 159, 205); border:none;">Xem</a>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(235, 29, 54); border:none;">Xóa</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4">
        <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px; z-index: 2">
          <img src="./CSS/images/folder.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(118, 159, 205); border:none;">Xem</a>
            <a href="#" class="btn btn-primary" style="background-color:  rgb(235, 29, 54); border:none;">Xóa</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <p>Footer</p>
  </footer>
</body>

</html>