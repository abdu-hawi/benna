<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>CodePen - A Pen by Mohithpoojary</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form class="login">
                <div class="login__field">
                    <input type="tel" class="login__input" placeholder="رقم الهوية الوطنية">
                    <i class="login__icon  fas fa-id-card"></i>
                </div>
{{--                <div class="login__field">--}}
{{--                    <i class="login__icon fas fa-lock"></i>--}}
{{--                    <input type="password" class="login__input" placeholder="Password">--}}
{{--                </div>--}}
                <button class="button login__submit">
                    <i class="button__icon fas fa-chevron-left"></i>
                    <span class="button__text">طباعة الشهادة</span>
                </button>
            </form>
            <div class="social-login">
{{--                <h3>log in via</h3>--}}
{{--                <div class="social-icons">--}}
{{--                    <a href="#" class="social-login__icon fab fa-instagram"></a>--}}
{{--                    <a href="#" class="social-login__icon fab fa-facebook"></a>--}}
{{--                    <a href="#" class="social-login__icon fab fa-twitter"></a>--}}
{{--                </div>--}}
                <img width="100" src="{!! asset("image/logo.png") !!}">
            </div>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>
<!-- partial -->

</body>
</html>
