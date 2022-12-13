<?php
    $filename=$_POST['filename'];
    session_start();
    $folder=$_SESSION['user'];
    if (!file_exists('files/' . $folder)) {
        mkdir("files/" . $folder, 0777, true);
    }
    $dir = 'files/'. $folder.'/';
    $uploadOk = 1;
    $target_file=$dir.basename($_FILES["file"]["name"]);
    $type=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $size= $_FILES["file"]["size"];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $t = date('d-m-y h:i:s');
    $image="CSS/images/";
    if($type=='doc' || $type=='docx'){
        $image = $image.'doc.png';
    }
    else if($type=='pdf'){
        $image=$image.'pdf.png';
    }
    else if($type=='ppt' || $type=='pptx'){
        $image = $image . 'ppt.png';
    }
    else if($type=='txt'){
        $image = $image . 'txt.png';
    }
    else if($type=='mp3'){
        $image = $image . 'mp3.png';
    }
    else if($type=='xlsx'){
        $image = $image . 'xls.png';
    }
    else {
        $image= $dir . $filename;
    }
    $new_path=$dir.$filename;
    if (file_exists($target_file)) {
        echo "Tệp tin đã tồn tại.";
        $uploadOk = 0;
    }
    if ($_FILES["file"]["size"] > 5000000) {
        echo "Dung lượng tệp tin quá lớn." ;
        $uploadOk = 0;
    }
    if ($type !== "txt" && $type !== "doc" && $type !== "docx"&& $type !== "jpg"&& $type !== "jpeg"&& $type !== "pdf"&& $type !== "png"&& $type !== "mp3"&& $type !== "ppt"&& $type !== "pptx"&& $type !== "xlsx") {
        echo "Không hỗ trợ lưu trữ tệp tin này." ;
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Không thể tải lên tệp tin.";
    } else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $new_path)) {
        include_once("./config.php");
        $connect = connect();
        $insert = "INSERT INTO file(username,file_name,type,size,modify,deleted,open_time,image) VALUE('" . $folder . "','" . $filename . "','" . $type . "','" . $size . "','" . $t . "','0','" . $t . "','".$image."')";
        $query = mysqli_query($connect, $insert);
        if ($query){
            echo htmlspecialchars(basename($_FILES["file"]["name"])) . " đã được tải lên thành công";
        }
        else {
            echo mysqli_error($connect);
        }
        } else {
            echo "Đã có sự cố trong quá trình tải lên.Vui lòng thử lại" ;
        }
    }
    
?>