<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Fakultetlar taxrirlash </h1>
            <p>Tizimdagi fakultetlarni taxrirlash</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Fakultetlar</a></li>

            <li class="breadcrumb-item"><a href="#">Taxrirlash</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/fakulty/update?id=<?=$row['id']?>" method="POST">
                            <input type="hidden" name="_method" value="PUT" />
                            <div class="form-group">
                                <label for="">Nomi</label>
                                <input class="form-control" id="" name="name" type="text" value="<?=$row['name']?>" aria-describedby="emailHelp" placeholder="Name">
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