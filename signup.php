<?php 

    session_start();
    require_once 'config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUSRC สหกิจศึกษา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h3 class="mt-4">สมัครสมาชิก KUSRC สหกิจศึกษา</h3>
        <hr>
        <form action="signup_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

            <div class="mb-3">
                <label for="nisitid" class="form-label">NisitID (รหัสนิสิต)</label>
                <input type="text" placeholder="กรอกรหัสนิสิต" class="form-control" name="nisitid" aria-describedby="nisitid">
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">ชื่อ</label>
                <input type="text" placeholder="กรอกชื่อ" class="form-control" name="firstname" aria-describedby="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">นามสกุล</label>
                <input type="text" placeholder="กรอกนามสกุุล" class="form-control" name="lastname" aria-describedby="lastname">
            </div>
            <div class="mb-3">
                <label for="phonenum" class="form-label">เบอร์โทรศัพท์</label>
                <input type="tel" placeholder="กรอกเบอร์โทรศัพท์" class="form-control" name="phonenum" aria-describedby="phonenum">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">อีเมล (ตัวอย่าง @ku.th, @live.ku.th)</label>
                <input type="email" placeholder="กรอกอีเมล" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" placeholder="กรอกรหัสผ่าน" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="confirm password" class="form-label">ยืนยันรหัสผ่าน</label>
                <input type="password" placeholder="กรอกยืนยันรหัสผ่าน" class="form-control" name="c_password">
            </div>
            <button type="submit" name="signup" class="btn btn-success btn-lg">สมัครสมาชิก</button>
        </form>
        <hr>
        <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="index.php">เข้าสู่ระบบ</a></p>
    </div>
    
</body>
<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
    <div class="text-center p-3" style="background-color: #03a96b;">
        KUSRC:
        <a class="text-white" href="https://reg.src.ku.ac.th/res/">มหาลัยเกษตรศาสตร์ ศรีราชา</a>
</html>