<?php
    if (empty($_SESSION['email'])){
        header("locations: /code");
    }
?>
<!DOCTYPE html>
<html lang="uz">
<?php include_once 'layouts/head.view.php';?>
<style>
    .forget-f{
        margin: 30px;
        height: 150px;
    }
    .alert{
        margin: 15px;
    }
    .login-content .login-box{
        min-height: 450px;
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
        <div class="bs-component">
            <?php
                if (isset($_SESSION['email'])){
                    ?>
                        <div class="alert alert-dismissible alert-success">
                            <button class="close" type="button" data-dismiss="alert">×</button><strong>Ajoyib !</strong> Sizni tasdiqlash kodingiz, <a class="alert-link" href="#"><?=$_SESSION['email']?></a> ga yuborildi.
                        </div>
                    <?php
                }
            ?>
        </div>
        <form class="forget-f" action="/code/check" method="post">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Qayta tiklash</h3>

            <div class="form-group">
                <input class="form-control" type="email" placeholder="Email" name="email" hidden value="<?=$_SESSION['email']?>">
            </div>
            <div class="form-group">
                <label class="control-label">Code</label>
                <input class="form-control" type="number" placeholder="Code" name="code">
            </div>
            <div class="form-group">
                <label class="control-label">NEW PASSWORD</label>
                <input class="form-control" type="password" placeholder="Password" name="password">
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