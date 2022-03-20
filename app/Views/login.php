<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="/register" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="post" class="register-form" id="login-form" action="/logincontro/login">
                            <?php if (session()->getFlashdata('msg')) : ?>
                                <div class="#">
                                    <script>
                                        Swal.fire({
                                            icon: 'error',
                                            title: '<?= session()->getFlashdata('msg') ?>',
                                            text: 'โปรดตรวจสอบชื่อผู้ใช้หรือรหัสผ่านให้ถูกต้อง',
                                        })
                                    </script>

                                </div>
                            <?php endif ?>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="userName" placeholder="Your Name" value="<?= set_value('userName'); ?>" required />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password"  placeholder="Password" value="<?= set_value('password'); ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit"  class="form-submit" value="Login" />
                            </div>
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>