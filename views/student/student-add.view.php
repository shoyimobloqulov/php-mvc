<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Talabalar Qo'shish </h1>
            <p>Tizimdagi Talabalar Qo'shish</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Talabalar</a></li>

            <li class="breadcrumb-item"><a href="#">Qo'shish</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/student/store" method="post">
                            <div class="form-group">
                                <label for="">FIO</label>
                                <input value="" class="form-control" id="" type="text" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Login</label>
                                <input value="" class="form-control" id="" type="text" placeholder="Login/ID" name="login">
                            </div>
                            <div class="form-group">
                                <label for="">Fakulteti</label>
                                <select class="form-control" id="demoSelect" name="fakulty_id">
                                    <optgroup label="Fakultetni tanlang">
                                        <?php
                                        foreach ($fakulty as $f){
                                            ?>
                                            <option value="<?=$f['id']?>"><?=$f['name']?></option>
                                            <?
                                        }
                                        ?>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Yo'nalish</label>
                                <select class="form-control" id="demoSelect1" name="direction_id">
                                    <optgroup label="Fakultetni tanlang">
                                        <?php
                                        foreach ($direction as $d){
                                            ?>
                                            <option value="<?=$d['id']?>"><?=$d['name']?></option>
                                            <?
                                        }
                                        ?>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Guruh</label>
                                <select class="form-control" id="demoSelect2" name="group_id">
                                    <optgroup label="Fakultetni tanlang">
                                        <?php
                                        foreach ($group as $g){
                                            ?>
                                            <option value="<?=$g['id']?>"><?=$g['name']?></option>
                                            <?
                                        }
                                        ?>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit">Qo'shish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once  __DIR__.'/../layouts/script.view.php'?>
</body>
</html>