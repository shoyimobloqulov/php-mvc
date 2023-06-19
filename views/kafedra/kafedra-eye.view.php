<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Kafedralar</h1>
            <p>Barcha Tizimda mavjud Kafedralar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Kafedralar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mb-3">
                <a class="btn btn-success" href="./kafedra/create"><i class="fa fa-plus"></i> Qo'shish</a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="tile">

                <div class="tile-body">
                    <div class="table-responsive">
                        
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nomi</th>
                                <th>Fakultet</th>
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
                                    <td><?=$r->FakultyName($f['fakulty_id'])?></td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="/kafedra/delete?id=<?=$f['id']?>" method="post">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete </button>
                                            </form>
                                            <a href="/kafedra/edit?id=<?=$f['id']?>" class="btn btn-info"> <i class="fa fa-edit"></i> Taxrirlash</a>
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
<?php include_once  __DIR__.'/../layouts/script.view.php'?>
</body>
</html>