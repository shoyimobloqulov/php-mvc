<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>O'qituvchi Qo'shish </h1>
            <p>Tizimdagi O'qituvchi Qo'shish</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">O'qituvchi</a></li>

            <li class="breadcrumb-item"><a href="#">Qo'shish</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/teachers/store" method="post">
                            <div class="form-group">
                                <label for="">FIO</label>
                                <input value="" class="form-control" id="" type="text" placeholder="Name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="">Fakulteti</label>
                                <select class="form-control" id="demoSelect" name="fakulty_id">
                                    <optgroup label="Fakultetni tanlang">
                                        <?php
                                        foreach ($fakultet as $f){
                                            ?>
                                            <option value="<?=$f['id']?>"><?=$f['name']?></option>
                                            <?
                                        }
                                        ?>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Kafedra</label>
                                <select class="form-control" id="demoSelect1" name="kafedra_id">
                                    <optgroup label="Kafedrani tanlang">
                                        <?php
                                        foreach ($kafedra as $d){
                                            ?>
                                            <option value="<?=$d['id']?>"><?=$d['name']?></option>
                                            <?
                                        }
                                        ?>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input value="" class="form-control" id="" type="email" placeholder="Email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input value="" class="form-control" id="" type="password" placeholder="Password" name="password">
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