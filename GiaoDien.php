<?php
require './tracnghiem.php';
$cauhoi = get_cauhoi();
if (!empty($_POST['Nop_Bai'])) {
    for ($x = 1; $x <= 10; $x++) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST[$x])) {
                $chon = $_POST[$x];
            } else {
                $chon = false;
            }
            chondapan($x, $chon);
        }
    }
    add_result();
    header("location: KetQua.php");
}
disconnect_db();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Làm Bài Thi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/giaodien.css">
</head>

<body>

    <div class="color"></div>
    <div class="box">
        <div class="title">
            <h1 class="text-center">Bài Thi Môn Toán Lớp 1 Quốc Tế</h1>
            <span>Bài Thi Bao Gồm 10 câu hỏi.</span>
            <br>
            <span>Thời Gian Làm Bài: 15 phút.</span>
            <a href="DS_BaiThi.php">Quay Lại</a>
        </div>
    </div>
    <form method="POST">
        <?php
        $i = 1;
        foreach ($cauhoi as $item) { ?>

            <div class="box">
                <div class="cauhoi">

                    <p><?php echo 'Câu ' . $item['id'] . ' : ' . $item['CauHoi'] ?></p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="a" name="<?php echo $item['id'] ?>">
                        <label class="form-check-label" for="A"><?php echo 'A : ' . $item['DapAn_A'] ?></label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="b" name="<?php echo $item['id'] ?>">
                        <label class="form-check-label" for="B"><?php echo 'B : ' . $item['DapAn_B'] ?></label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="c" name="<?php echo $item['id'] ?>">
                        <label class="form-check-label" for="C"><?php echo 'C : ' . $item['DapAn_C'] ?></label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="d" name="<?php echo $item['id'] ?>">
                        <label class="form-check-label" for="D"><?php echo 'D : ' . $item['DapAn_D'] ?></label>
                    </div>

                </div>
            </div>

        <?php } ?>
        <div class="box">
            <input type="submit" name="Nop_Bai" value="Nộp Bài" class="btn btn-success">
        </div>
    </form>

</body>

</html>