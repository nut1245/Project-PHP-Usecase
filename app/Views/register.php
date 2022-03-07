<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/register.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center ">
                    &nbsp;
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 ">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(https://cdn3.f-cdn.com/contestentries/1733723/31242958/5e49683f03d42_thumb900.jpg) ; " >
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">

                                <div class="w-100" style="text-align:center;">
                                    <h3 class="mb-4">ลงทะเบียน</h3>
                                    <?php if (isset($validation)) : ?>
                                        <div class="alert alert-danger"><?= $validation->listErrors('msg'); ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <form action="register" method="post" class="signin-form">
                                <div class="row">
                                    <div class="col ">
                                        <label class="label" for="FName">ชื่อ</label>
                                        <input type="text" class="form-control" placeholder="ชื่อ" id="FName" name="FName" require>
                                    </div>
                                    <div class="col ">
                                        <label class="label" for="LName">นามสกุล</label>
                                        <input type="text" class="form-control" placeholder="นามสกุล" id="LName" name="LName" require>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col ">
                                        <label class="label" for="userName">ชื่อผู้ใช้</label>
                                        <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" id="userName" name="userName" require>
                                    </div>
                                    <div class="col ">
                                        <label for="gender" class="form-label">เพศ</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="ชาย">
                                            <label class="form-check-label" for="flexRadioDefault1">ชาย</label>
                                            <i class="far fa-mars" style="color: #1194ff;"></i>
                                            &nbsp;&nbsp;
                                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="หญิง">
                                            <label class="form-check-label" for="flexRadioDefault2">หญิง</label>
                                            <i class="far fa-venus" style="color: #ff5ebc;"></i>
                                            &nbsp;&nbsp;
                                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="อื่นๆ">
                                            <label class="form-check-label" for="flexRadioDefault2">อื่น</label>
                                            <i class="far fa-venus-mars" style="color: #7e2dff;"></i>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col ">
                                        <label class="label" for="password">รหัสผ่าน</label>
                                        <input type="password" class="form-control" placeholder="รหัสผ่าน" id="password" name="password" require>

                                    </div>
                                    <div class="col ">
                                        <label class="label" for="confirm">ยืนยันรหัสผ่าน</label>
                                        <input type="password" onchange="checkPassword()" class="form-control" id="confirmPassword" name="confirmpassword">
                                        
                                    </div>
                                </div>
                                <p style="text-align: center; color: red;" id="message"></p>
                                <div class="row">
                                    <div class="col ">
                                        <label class="label" for="phoneNumber">เบอร์โทร</label>
                                        <input type="text" class="form-control" placeholder="เบอร์โทร" id="phoneNumber" name="phoneNumber" require>
                                    </div>
                                    <div class="col ">
                                        <label class="label" for="offImage">รูปภาพ</label>
                                        <input type="text" class="form-control" placeholder="รูปภาพ" id="offImage" name="offImage" require>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" id="btn" class="form-control btn btn-primary ">ลงทะเบียน</button>
                                </div>
                                <p class="text-center">มีบัญชีแล้วใช่ไหม? <a href="/">เข้าสู่ระบบ</a></p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        function checkPassword() {
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirmPassword").value;
            console.log(password, confirmPassword);
            if (password == confirmPassword) {
                document.getElementById("message").innerHTML = "รหัสผ่านตรงกัน";
                document.getElementById("btn").disabled = false;
            } else {
                document.getElementById("message").innerHTML = "รหัสผ่านไม่ตรงกัน !!";
                document.getElementById("btn").disabled = true;
            }
        }
    </script>

</body>

</html>