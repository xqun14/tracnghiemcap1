<?php
require 'tracnghiem.php';
$users = get_user();
disconnect_db();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hiển thị kết quả</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/giaodien.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="nen">
    <div class="color">
        <div class="d-flex justify-content-end pt-4">
            <a class="btn dangxuat" href="index.php" role="button">Đăng Xuất</a>
        </div>
    </div>

    <div class="justify-content-center mt-5">
        <div class="container infor-form col-10 col-sm-10 col-md-5 col-lg-4 col-xl-3">
            <div class="justify-content-center d-flex mt-2">
                <form method="post" action="KiemTra.php">
                    <h4 class="text-center">Kết quả làm bài</h4><br>
                    <label>Họ và tên:</label><input type="text" name="name" value="<?php echo $users['user_name']; ?>" readonly>
                    <br>
                    <label>Lớp:</label><input type="text" name="class" value="<?php echo $users['class']; ?>" readonly>
                    <br>
                    <label>Điểm:</label><input type="text" name="class" value="<?php echo $users['result']; ?>" readonly>
                    <br>
                    <div class="justify-content-between d-flex my-3">
                        <input type="submit" name="kiemtra" value="Kiểm tra" class="btn-next btn">
                </form>
                <form action="XepHang.php">
                    <input type="submit" name="kiemtra" value="Bảng Xếp Hạng" class="btn-next btn">
                </form>

            </div>

        </div>
    </div>

</body>

</html>