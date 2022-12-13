<?php
session_start();
include_once('./config.php');
$connect = connect();
$login = false;
$username = "";
$email;
$name = "";
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
$login = true;
$email = $_SESSION['user'];
$sql = "SELECT * FROM users WHERE username='" . $email . "' LIMIT 1";
$query = mysqli_query($connect, $sql);
$num_row = mysqli_num_rows($query);
if ($num_row > 0) {
    $data = mysqli_fetch_assoc($query);
    $name = $data['name'];
}
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['user']);
    header('Location: login.php');
    exit();
}
$sql_select = "SELECT * FROM file WHERE username='" . $email . "'";
$run = mysqli_query($connect, $sql_select);
$num = mysqli_num_rows($run);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style_index.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Trang chủ</title>
</head>

<body>
    <header>
        <h>File Manager</h>
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
                    <form class="d-flex" role="search" style="width: 60%; padding-left:10%;">
                        <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm</button>
                    </form>
                    <ul>
                        <li class="nav-item dropdown" id="login">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                if ($name != "") {
                                    echo $name;
                                } else {
                                    echo "User";
                                }
                                ?>
                            </a>
                            <ul class="dropdown-menu" id="dropdownLogin">
                                <li><a class="dropdown-item" href="account_setting.php?action=1">Cài đặt tài khoản</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="index.php?dangxuat=1">Đăng xuất</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <section>
            <nav id="navbar2">
                <div class="dropdown">
                    <img src="./CSS/images/folder3.png" width="15%" height="15%">
                    <button class="btn btn-secondary dropdown-toggle" id="dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Thư mục của tôi
                    </button>
                    <ul class="dropdown-menu" id="dropdownUL">
                        <li><a class="dropdown-item" href="#">Thêm thư mục</a></li>
                        <li><a class="dropdown-item" href="#">Quản lý thư mục</a></li>
                    </ul>
                </div>
                <div class="AddFile">
                    <img src="./CSS/images/Add.png" width="15%" height="15%">
                    <button type="button" class="btn btn-light" id="btnAdd" onclick="openPopup()">Thêm tập tin</button>
                    <div class="popup" id="popup" ">
                        <form style=" background: linear-gradient(135deg, #71b7e6, #9b59b6); border-radius:10px; padding:20px">
                        <h style=" color: black; font-size: 25px; font-family: 'Times New Roman', Times, serif; margin-left: 35%;"> Chọn tập tin </h>
                        <!-- <input class="form-control" type="text" id="nameFile" placeholder="Tên tệp tin"> -->
                        <input class="form-control" type="file" id="formFile">
                        <p id="error" style="text-align:center;color:red"></p>
                        <div class="formAdd" style="display: flex;">
                            <button type="button" id="btnAddFile" onclick="uploadFile()"> Thêm </button>
                            <button type="button" id="btnCancel" onclick="closePopup()"> Hủy </button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="priority">
                    <img src="./CSS/images/priority5.png" width="15%" height="15%">
                    <a class="btn" id="btnPriority" href="priority.php">Ưu tiên</a>
                    <!-- <button type="button" class="btn btn-light" id = "btnShare">Đã chia sẻ</button> -->
                </div>
                <div class="share">
                    <img src="./CSS/images/share7.png" width="15%" height="15%">
                    <a class="btn" id="btnShare" href="share.php">Đã chia sẻ</a>
                    <!-- <button type="button" class="btn btn-light" id = "btnShare">Đã chia sẻ</button> -->
                </div>
                <div class="recent">
                    <img src="./CSS/images/recent1.png" width="15%" height="15%">
                    <a class="btn" id="btnRecent" href="recent.php">Gần đây</a>
                    <!-- <button type="button" class="btn btn-light" id = "btnShare">Đã chia sẻ</button> -->
                </div>
                <div class="trash">
                    <img src="./CSS/images/trash1.png" width="15%" height="15%">
                    <a class="btn" id="btnTrash" href="trash.php">Thùng rác</a>
                    <!-- <button type="button" class="btn btn-light" id = "btnShare">Đã chia sẻ</button> -->
                </div>

            </nav>

            <article id="art2">
                <div class="row">
                    <?php
                    if ($num == 0) {
                        echo "<h2 style=\"text-align:center\">Chưa có dữ liệu lưu trữ</h2>";
                    } else {
                        while ($row = mysqli_fetch_array($run)) {
                    ?>
                            <div class="col-lg-3 col-md-3">
                                <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px;">
                                    <img src="./<?php echo $row['image'] ?>" class="card-img-top">
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $row['file_name'] ?></p>
                                        <div class="dropdown" id="dropdownThuMuc" style=" background-color: rgb(247, 251, 252);color: rgb(0, 74, 124);font-family: 'Times New Roman', Times, serif;">
                                            <button id="dropDownOfFile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="./CSS/images/3dot.png" width="15%" height="15%"> </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Tải về</a></li>
                                                <li><a class="dropdown-item" href="#">Đổi tên tập tin</a></li>
                                                <li><a class="dropdown-item" href="#">Xem chi tiết </a></li>
                                                <li><a class="dropdown-item" href="#">Xóa</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <!-- <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thư mục</li>
                        </ol>
                    </nav> -->
                    <!-- <div class="col-lg-3 col-md-3">
                        <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px;">
                            <img src="./CSS/images/folder.png" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Tên tập tin</p>
                                <div class="dropdown" id="dropdownThuMuc" style=" background-color: rgb(247, 251, 252);color: rgb(0, 74, 124);font-family: 'Times New Roman', Times, serif;">
                                    <button id="dropDownOfFile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="./CSS/images/3dot.png" width="15%" height="15%"> </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Tải về</a></li>
                                        <li><a class="dropdown-item" href="#">Đổi tên tập tin</a></li>
                                        <li><a class="dropdown-item" href="#">Xem chi tiết </a></li>
                                        <li><a class="dropdown-item" href="#">Xóa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-3">
                        <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px; z-index: 2;">
                            <img src="./CSS/images/folder.png" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Tên tập tin</p>
                                <div class="dropdown" style=" background-color: rgb(247, 251, 252);color: rgb(0, 74, 124);font-family: 'Times New Roman', Times, serif;">
                                    <button id="dropDownOfFile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="./CSS/images/3dot.png" width="15%" height="15%"> </button>
                                    <ul class="dropdown-menu" id="dropdownUL">
                                        <li><a class="dropdown-item" href="#">Tải về</a></li>
                                        <li><a class="dropdown-item" href="#">Đổi tên tập tin</a></li>
                                        <li><a class="dropdown-item" href="#">Xem chi tiết </a></li>
                                        <li><a class="dropdown-item" href="#">Xóa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px; z-index: 2;">
                            <img src="./CSS/images/folder.png" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Tên tập tin</p>
                                <div class="dropdown" style=" background-color: rgb(247, 251, 252);color: rgb(0, 74, 124);font-family: 'Times New Roman', Times, serif;">
                                    <button id="dropDownOfFile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="./CSS/images/3dot.png" width="15%" height="15%"> </button>
                                    <ul class="dropdown-menu" id="dropdownUL">
                                        <li><a class="dropdown-item" href="#">Tải về</a></li>
                                        <li><a class="dropdown-item" href="#">Đổi tên tập tin</a></li>
                                        <li><a class="dropdown-item" href="#">Xem chi tiết </a></li>
                                        <li><a class="dropdown-item" href="#">Xóa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="card" style="width: 85%; background-color: rgb(247, 251, 252);border: 0px; z-index: 2;">
                            <img src="./CSS/images/folder.png" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Tên tập tin</p>
                                <div class="dropdown" style=" background-color: rgb(247, 251, 252);font-family: 'Times New Roman', Times, serif;">
                                    <button id="dropDownOfFile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="./CSS/images/3dot.png" width="15%" height="15%"> </button>
                                    <ul class="dropdown-menu" id="dropdownUL">
                                        <li><a class="dropdown-item" href="#">Tải về</a></li>
                                        <li><a class="dropdown-item" href="#">Đổi tên tập tin</a></li>
                                        <li><a class="dropdown-item" href="#">Xem chi tiết </a></li>
                                        <li><a class="dropdown-item" href="#">Xóa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

            </article>
        </section>
    </div>
    <footer>
        <p>Footer</p>
    </footer>
    <script>
        let popup = document.getElementById("popup");

        function openPopup() {
            popup.classList.add("open-popup");
        }

        function closePopup() {
            popup.classList.remove("open-popup");
        }

        function uploadFile() {
            var file_name = $("#formFile").val().split('\\').pop();
            var file_data = $('#formFile').prop('files')[0];

            var er = document.getElementById("error");

            if ($('#formFile')[0].files.length === 0) {
                er.innerHTML = ("Vui lòng chọn file");
            } else {
                var form_data = new FormData();
                form_data.append("file", file_data);
                form_data.append("filename", file_name);
                $.ajax({
                    url: "upload.php",
                    type: "POST",
                    dataType: 'script',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(dat2) {
                        window.alert(dat2);
                        $("#nameFile").val("");
                        $('#formFile').val($('#formFile')[0].files.defaultValue);
                        location.reload();
                    }
                });
            }

        }
    </script>
</body>

</html>