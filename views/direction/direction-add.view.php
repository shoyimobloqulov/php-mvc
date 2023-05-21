<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Yo'nalish qo'shish </h1>
            <p>Tizimga Yo'nalish qo'shish</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Yo'nalish</a></li>

            <li class="breadcrumb-item"><a href="#">Qo'shish</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/direction/store" method="post">
                            <div class="form-group">
                                <label for="">Nomi</label>
                                <input class="form-control" id="" name="name" type="text" aria-describedby="emailHelp" placeholder="Name ">
                            </div>

                            <div class="form-group">
                                <label for="exampleSelect1">Fakultetni tanlang</label>
                                <select class="form-control" id="exampleSelect1" name="fakulty_id">
                                    <?php
                                        foreach ($fakulty as $f) {
                                            ?>
                                                <option value="<?=$f['id']?>"><?=$f['name']?></option>
                                            <?
                                        }
                                    ?>
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