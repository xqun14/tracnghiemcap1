<?php
require 'tracnghiem.php';
$users = get_rankuser();
disconnect_db();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/XepHang.css">
    <title>Document</title>
</head>

<body>
    <div class="color"></div>
    <div class="box ">
        <h1>Bảng Xếp Hạng</h1>
    </div>

    <div class="box">
        <div class="row">
            <?php
            $rank = 1;
            foreach ($users as $item) { ?>
                <?php if ($rank < 4) { ?>
                    <div class="col-4">
                        <div class="top">
                            <div class="row">

                                <div class="col-12">
                                    <ion-icon class="avata" name="person-circle-outline"></ion-icon>
                                </div>
                                <div class="col-12">
                                    <span class="user_name"><?php echo $item['user_name'] ?></span>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <?php echo 'Lớp: ' . $item['class'] ?>
                                        </div>
                                        <div class="col-6">
                                            <span class="result">
                                                <?php echo 'Điểm: ' . $item['result'] ?>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <span class="rank"><?php echo 'Hạng ' . $rank ?></span>
                                </div>
                                <div class="col-12">
                                    <ion-icon class="<?php echo 'cup' . $rank ?>" name="trophy-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($rank > 3) { ?>
                    <div class="col-12 outtop">
                        <div class="out">
                            <div class="row">
                                <div class="col-1">
                                    <span class="rank">
                                        <?php echo 'Hạng ' . $rank ?>
                                    </span>
                                </div>
                                <div class="col-5">
                                    <ion-icon class="avata_2" name="person-circle-outline"></ion-icon>
                                    <span class="user_name"><?php echo $item['user_name'] ?></span>
                                </div>
                                <div class="col-3">
                                    <span><?php echo 'Lớp: ' . $item['class'] ?></span>
                                </div>
                                <div class="col-3">
                                    <span class="result"><?php echo 'Điểm: ' . $item['result'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            <?php $rank += 1;
            } ?>
        </div>
    </div>
    <div class="box">
        <a class="btn" href="KetQua.php" role="button">Trở Về</a>
    </div>

</body>

</html>