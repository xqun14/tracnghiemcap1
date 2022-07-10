<?php 
require 'tracnghiem.php';

if(!empty($_POST['login'])){
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['class'] = isset($_POST['class']) ? $_POST['class'] : '';
    $error = array();
    if (empty($data['name'])){
        $error['name'] = 'Chưa nhập họ tên người dùng';
        $message = "Thông tin chưa được nhập đầy đủ !<br>Vui lòng nhập lại !";
    }
    if (empty($data['class'])){
        $error['class'] = 'Chưa nhập lớp của người dùng';
        $message = "Thông tin chưa được nhập đầy đủ !<br>Vui lòng nhập lại !";
    }
    if (!$error){
        del_data();
        add_user($data['name'], $data['class']);
        header("location: DS_BaiThi.php");
    }
}
disconnect_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Giải các bài thi HSG quốc tế</title>
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="body-image">
        <div class="header py-1 ">
           <h1 class="text-center">Website thi trắc nghiệm siêu cấp provip no.1</h1>
           <p class="text-end">Made by: Hợp Phố - Xuân Quân &emsp;</p>
        </div>
        <div class="row">
            <div class="container body-form col-10 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                <div class="justify-content-center d-flex mt-2">
                    <form method="post" action="">
                        <h5 class="text-center">Hãy nhập thông tin của bạn</h5><br>
                        <label>Họ và tên:</label><input type="text" name="name" placeholder="Nhập họ và tên">
                        <br>
                        <label>Lớp:</label><input type="text" name="class" placeholder="Nhập lớp">
                        <br><?php if(!empty($_POST['login'])){ 
                            if (empty($data['name'])||empty($data['class']) ){ 
                                echo "<span style='color: red';>$message</span>";
                                echo header("refresh: 5");}
                        } ?>   
                        <div class="justify-content-center d-flex my-3">
                            <input type="submit" name="login" value="Tiếp Tục" class="btn btn-next ">
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
