<?php 

    session_start();
    require_once 'config/db.php';

    if (isset($_POST['signin'])) {
        $nisitid = $_POST['nisitid'];
        $password = $_POST['password'];

      
        if (empty($nisitid)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสนิสิต';
            header("location: index.php");
        /* } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
            header("location: index.php"); */
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: index.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location: index.php");
        } else {
            try {

                $check_data = $conn->prepare("SELECT * FROM users WHERE nisitid = :nisitid");
                $check_data->bindParam(":nisitid", $nisitid);
                $check_data->execute();
                $row = $check_data->fetch(PDO::FETCH_ASSOC);

                if ($check_data->rowCount() > 0) {

                    if ($nisitid == $row['nisitid']) {
                        if (password_verify($password, $row['password'])) {
                            if ($row['urole'] == 'admin') {
                                $_SESSION['admin_login'] = $row['id'];
                                header("location: main.php");
                            } else {
                                $_SESSION['user_login'] = $row['id'];
                                header("location: user.php");
                            }
                        } else {
                            $_SESSION['error'] = 'รหัสผ่านผิด';
                            header("location: index.php");
                        }
                    } else {
                        $_SESSION['error'] = 'NisitID ผิด';
                        header("location: index.php");
                    }
                } else {
                    $_SESSION['error'] = "ไม่มีข้อมูลในระบบ กรุณาสมัครสมาชิก";
                    header("location: index.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>