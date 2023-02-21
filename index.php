<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUSRC สหกิจศึกษา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<style>
.bgpageindex {
    background: linear-gradient(rgba(250,250,250, 0.3),
    rgba(250,250,250, 0.6)), url('img/bgindex.jpg');  
    background-repeat: no-repeat;
    height: 83vh;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<nav class="navbar navbar-expand-sm" style="background-color: #03a96b;">
    <div class="container-fluid">
        <a class="navbar-link" href="https://www.google.com">
            <img src="img/logokusrc.png" alt="logokusrc" style="width:100px; margin-left: 30px;" class="rounded-pill">
        </a>
    </div>
</nav>

<body>
    <div class="bgpageindex">


        <!--     <div class="container"> -->
        <div class="container py-5">
            <div class="row g-0 align-items-center" style="margin-right: 320px; margin-left: 320px;">
                    <div class="card cascading-right" style="background: #c1eefb;backdrop-filter: blur(10px); border-radius: 2rem;">
                        <div class="card-body p-5 shadow-5 text-left">
                            <h3 class="fw-bold mb-2 text-uppercase">เข้าสู่ระบบ KUSRC สหกิจศึกษา</h3>
                            <hr>
                            <form action="signin_db.php" method="post">
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

                                <div class="mb-3">
                                    <label for="nisitid" class="form-label"><i
                                            class="bi bi-person-circle"></i>รหัสนิสิต</label>
                                    <input type="text" placeholder="NisitID" class="form-control" name="nisitid"
                                        aria-describedby="nisitid">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">รหัสผ่าน</label>
                                    <input type="password" placeholder="Password" class="form-control" name="password">
                                </div>
                                <button type="submit" name="signin" class="btn btn-success btn-lg">เข้าสู่ระบบ</button>
                                
                            </form>
                            <hr>
                            <p>ยังไม่เป็นสมาชิกใช่ไหม คลิ๊กที่นี่เพื่อ <a href="signup.php">สมัครสมาชิก</a></p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
    <div class="text-center p-3" style="background-color: #03a96b;">
        KUSRC:
        <a class="text-white" href="https://reg.src.ku.ac.th/res/">มหาลัยเกษตรศาสตร์ ศรีราชา</a>
    </div>
</footer>
</html>