<?php
require 'tracnghiem.php';
$sinhviens = get_cauhoi();
$user = get_user();
disconnect_db();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Kiểm Tra Bài Thi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/giaodien.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div>
        <div class="color"></div>
        <div class="box">
            <div class="title">
                <h1 class="text-center">Bài Thi Môn Toán Lớp 1 Quốc Tế</h1>
                <span>Bài Thi Bao Gồm 10 câu hỏi.</span>
                <br>
                <?php echo 'Kết quả làm bài: ' . $user['result'] . '/10' ?>
            </div>
        </div>
        <form method="POST" action="KetQua.php">
            <?php
            foreach ($sinhviens as $item) { ?>

                <div class="box">
                    <div class="cauhoi">

                        <p><?php echo 'Câu ' . $item['id'] . ' : ' . $item['CauHoi'] ?></p>

                        <?php if ('a' == $item['DapAn_Dung']) {
                            if ('a' == $item['DapAn_Chon']) {
                                if ($item['DapAn_Chon'] == $item['DapAn_Dung']) {
                                    echo 'Bạn đã chọn đúng: <br>';
                                    echo "<div class='form-check da_dung'>";
                                }
                            } else {
                                echo 'Đáp án đúng: <br>';
                                echo "<div class='form-check da_dung'>";
                            }
                        } else if ('a' == $item['DapAn_Chon']) {
                            if ($item['DapAn_Chon'] == $item['DapAn_Dung']) {
                                echo 'Bạn đã chọn đúng: <br>';
                                echo "<div class='form-check da_dung'>";
                            }
                            if ($item['DapAn_Chon'] != $item['DapAn_Dung']) {
                                echo 'Bạn đã chọn sai: <br>';
                                echo "<div class='form-check da_sai'>";
                            }
                        } else {
                            echo "<div class='form-check'>";
                        }
                        ?>
                        <label class="form-check-label" for="A"><?php echo 'A : ' . $item['DapAn_A'] ?></label>
                        <?php echo "</div>" ?>

                        <?php if ('b' == $item['DapAn_Dung']) {
                            if ('b' == $item['DapAn_Chon']) {
                                if ($item['DapAn_Chon'] == $item['DapAn_Dung']) {
                                    echo 'Bạn đã chọn đúng: <br>';
                                    echo "<div class='form-check da_dung'>";
                                }
                            } else {
                                echo 'Đáp án đúng: <br>';
                                echo "<div class='form-check da_dung'>";
                            }
                        } else if ('b' == $item['DapAn_Chon']) {
                            if ($item['DapAn_Chon'] == $item['DapAn_Dung']) {
                                echo 'Bạn đã chọn đúng: <br>';
                                echo "<div class='form-check da_dung'>";
                            }
                            if ($item['DapAn_Chon'] != $item['DapAn_Dung']) {
                                echo 'Bạn đã chọn sai: <br>';
                                echo "<div class='form-check da_sai'>";
                            }
                        } else {
                            echo "<div class='form-check'>";
                        }
                        ?>
                        <label class="form-check-label" for="B"><?php echo 'B : ' . $item['DapAn_B'] ?></label>
                        <?php echo "</div>" ?>

                        <?php if ('c' == $item['DapAn_Dung']) {
                            if ('c' == $item['DapAn_Chon']) {
                                if ($item['DapAn_Chon'] == $item['DapAn_Dung']) {
                                    echo 'Bạn đã chọn đúng: <br>';
                                    echo "<div class='form-check da_dung'>";
                                }
                            } else {
                                echo 'Đáp án đúng: <br>';
                                echo "<div class='form-check da_dung'>";
                            }
                        } else if ('c' == $item['DapAn_Chon']) {
                            if ($item['DapAn_Chon'] == $item['DapAn_Dung']) {
                                echo 'Bạn đã chọn đúng: <br>';
                                echo "<div class='form-check da_dung'>";
                            }
                            if ($item['DapAn_Chon'] != $item['DapAn_Dung']) {
                                echo 'Bạn đã chọn sai: <br>';
                                echo "<div class='form-check da_sai'>";
                            }
                        } else {
                            echo "<div class='form-check'>";
                        }
                        ?>
                        <label class="form-check-label" for="C"><?php echo 'C : ' . $item['DapAn_C'] ?></label>
                        <?php echo "</div>" ?>

                        <?php if ('d' == $item['DapAn_Dung']) {
                            if ('d' == $item['DapAn_Chon']) {
                                if ($item['DapAn_Chon'] == $item['DapAn_Dung']) {
                                    echo 'Bạn đã chọn đúng: <br>';
                                    echo "<div class='form-check da_dung'>";
                                }
                            } else {
                                echo 'Đáp án đúng: <br>';
                                echo "<div class='form-check da_dung'>";
                            }
                        } else if ('d' == $item['DapAn_Chon']) {
                            if ($item['DapAn_Chon'] == $item['DapAn_Dung']) {
                                echo 'Bạn đã chọn đúng: <br>';
                                echo "<div class='form-check da_dung'>";
                            }
                            if ($item['DapAn_Chon'] != $item['DapAn_Dung']) {
                                echo 'Bạn đã chọn sai: <br>';
                                echo "<div class='form-check da_sai'>";
                            }
                        } else {
                            echo "<div class='form-check'>";
                        }
                        ?>
                        <label class="form-check-label" for="D"><?php echo 'D : ' . $item['DapAn_D'] ?></label>
                        <?php echo "</div>" ?>

                    </div>
                </div>

            <?php } ?>
            <div class="box">
                <input type="submit" name=" " value="Quay lại" class=" btn btn-success">
            </div>
        </form>

    </div>
</body>

</html>