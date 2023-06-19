<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>
<style>
    #icon:hover{
        cursor: pointer;
    }
</style>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-users"></i>  Topshiriqlar</h1>
            <p>Barcha Tizimda mavjud Topshiriqlar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Topshiriqlar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mb-3">
                <a class="btn btn-success" href="../topshiriq/create"><i class="fa fa-plus"></i> Qo'shish</a>
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
                                <th>Haqida</th>
                                <th>Fayl</th>
                                <th>Fakultet</th>
                                <th>Yo'nalish</th>
                                <th>Guruh</th>
                                <th>Dedline</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $id = 1;
                            foreach ($topshiriq as $d) {
                                ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td><?=$d['izoh']?></td>
                                    <td><?=$d['file']?></td>

                                    <td><?=$f->FakultyName($d['fakulty_id'])?></td>
                                    <td><?=$y->DirectionName($d['direction_id'])?></td>
                                    <td><?=$g->guruhName($d['guruh_id'])?></td>
                                    <td><?=$d['dedline']?></td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="/topshiriq/delete?id=<?=$d['id']?>" method="post">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete </button>
                                            </form>
                                            <a href="/topshiriq/edit?id=<?=$d['id']?>" class="btn btn-info"> <i class="fa fa-edit"></i> Taxrirlash</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                $id ++;
                            } ?>
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