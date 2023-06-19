<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Amaliyotlar</h1>
            <p>Barcha Tizimda mavjud Amaliyotlar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Amaliyotlar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mb-3">
                <a class="btn btn-success" href="./amaliyot/create"><i class="fa fa-plus"></i> Qo'shish</a>
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
                                <th>Tel</th>
                                <th>Direktor</th>
                                <th>Manzil</th>
                                <th>Turi</th>
                                <th>Boshlanish vaqti</th>
                                <th>Tugash vaqti</th>
                                <th>Status</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $id = 1;
                            foreach ($amaliyot as $d) {
                                ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td><?=$d['name']?></td>
                                    <td><?=$d['telefon']?></td>
                                    <td><?=$d['direktor']?></td>
                                    <td><?=$d['manzil']?></td>
                                    <td><?=$d['turi']?></td>
                                    <td><?=$d['start_time']?></td>
                                    <td><?=$d['end_time']?></td>
                                    <td>
                                        <?php
                                            $data = new DateTime();
                                            $today = $data->format('Y-m-d H:s');
                                            $start = new DateTime($d['start_time']);
                                            $end = new DateTime($d['end_time']);
                                            $start_time = $start->format('Y-m-d H:s');
                                            $end_time = $end->format('Y-m-d H:s');
                                            if ($start_time <= $today and $today <= $end_time){
                                                echo "<span class='bg bg-info' style='color: #fff;margin: 5px;padding: 7px;font-size: 17px'>Davom etmoqda</span>";
                                            }
                                            elseif ($today > $end_time){
                                                echo "<span class='bg bg-danger' style='color: #fff;margin: 5px;padding: 7px;font-size: 17px'>O'tib ketgan</span>";
                                            }
                                            else{
                                                echo "<span class='bg bg-success' style='color: #fff;margin: 5px;padding: 7px;font-size: 17px'>Boshlanmagan</span>";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="/amaliyot/delete?id=<?=$d['id']?>" method="post">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete </button>
                                            </form>
                                            <a href="/amaliyot/edit?id=<?=$d['id']?>" class="btn btn-info"> <i class="fa fa-edit"></i> Taxrirlash</a>
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