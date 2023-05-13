
<!DOCTYPE html>
<html lang="uz">
<?php include_once 'layouts/head.view.php';?>

<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1>Online Jadval</h1>
    </div>
    <div class="login-box" style="height: 400px">

        <form class="login-form" action="/login/check" method="POST">

            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Tizimga kirish</h3>

            <div class="form-group">
                <label class="control-label">USERNAME</label>
                <input class="form-control" type="email" placeholder="Email" autofocus name="email">
            </div>
            <div class="form-group">
                <label class="control-label">PASSWORD</label>
                <input class="form-control" type="password" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                        <label>
                            <input type="checkbox"><span class="label-text">Eslab qolish</span>
                        </label>
                    </div>
                    <p class="semibold-text mb-2"><a href="/code" data-toggle="flip">Parolni unitdingizmi?</a></p>
                </div>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Kirish</button>
            </div>
        </form>
    </div>
</section>
<?php include_once 'layouts/script.view.php';?>

</body>
</html>