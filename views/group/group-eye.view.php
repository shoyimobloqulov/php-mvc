<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Guruhlar</h1>
            <p>Barcha Tizimda mavjud Guruhlar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Guruhlar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mb-3">
                <a class="btn btn-success" href="./group/create"><i class="fa fa-plus"></i> Qo'shish</a>
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
                                <th>Yo'nalish</th>
                                <th>Fakulteti</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($group as $g){
                            ?>
                            <tr>
                                <td>1</td>
                                <td><?=$g['name']?></td>
                                <td><?=$direction->DirectionName($g['direction_id'])?></td>
                                <td><?=$fakulty->FakultyName($g['fakulty_id'])?></td>
                                <td>
                                    <div class="btn-group">
                                        <form action="/group/delete?id=<?=$g['id']?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete </button>
                                        </form>
                                        <a href="/group/edit?id=<?=$g['id']?>" class="btn btn-info"> <i class="fa fa-edit"></i> Taxrirlash</a>
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