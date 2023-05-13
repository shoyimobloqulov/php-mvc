<!DOCTYPE html>
<html lang="uz">
<?php include_once 'layouts/head.view.php';?>
<style>
    .forget-f{
        margin: 30px;
        height: 150px;
    }
</style>
<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1>Online Jadval</h1>
    </div>
    <div class="login-box" style="height: 400px">
        <form class="forget-f" action="">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Qayta tiklash</h3>
            <div class="form-group">
                <label class="control-label">EMAIL</label>
                <input class="form-control" type="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <div class="utility">
                    <p class="semibold-text mb-2"><a href="/register">Hali yangimisiz?</a></p>
                </div>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
            </div>
        </form>
    </div>
</section>
<?php include_once 'layouts/script.view.php';?>
</body>
</html>