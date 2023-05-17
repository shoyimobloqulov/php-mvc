<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Fakultetlar</h1>
            <p>Barcha Tizimda mavjud fakultetlar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Fakultetlar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <div class="float-right">
                            <button class="btn btn-success"><i class="fa fa-plus"></i> Qo'shish</button>
                            <br><br>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nomi</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?
                                    foreach ($fakultys as $f){
                                ?>
                                <tr>
                                    <td>1</td>
                                    <td><?=$f['name']?></td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="/fakulty/delete?id=<?=$f['id']?>" method="post">
                                                <input type="text" name="id" value="<?=$f['id']?>" hidden>
                                                <a class="btn btn-primary" type="submit" id="delete" href="/fakulty/show?id=<?=$f['id']?>">
                                                    <i class="fa fa-lg fa-trash"></i>
                                                </a>
                                            </form>
                                            <form action="fakulty/edit" method="get">
                                                <input type="text" name="id" value="<?=$f['id']?>" hidden>
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-lg fa-edit"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div></div>
</main>
<?php include_once  __DIR__.'../layouts/script.view.php'?>
</body>
</html>