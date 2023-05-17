<!doctype html>
<html lang="en">
<?php include_once 'layouts/head.view.php'?>
<body>
<?php include_once 'layouts/navbar.view.php'?>
<?php include_once 'layouts/sidebar.view.php'?>
<main class="app-content">
    <div class="row user">
        <div class="col-md-6">
            <div class="tile user-settings">
                <h4 class="line-head">Settings</h4>
                <form action="./user/update" method="post">
                    <div class="row mb-4">
                        <div class="col-md-12 mb-2">
                            <label>FIO</label>
                            <input class="form-control" type="text" value="<?=$userRow['name']?>" name="name">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Email</label>
                            <input class="form-control" type="text" value="<?=$userRow['email']?>" name="email">
                        </div>

                        <div class="col-md-12 mb-2">
                            <label>Password</label>
                            <input class="form-control" type="password" value="admin123" name="password">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Saqlash</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include_once 'layouts/script.view.php'?>
</body>
</html>