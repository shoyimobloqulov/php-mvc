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
            <h1><i class="fa fa-users"></i>  O'qituvchilar</h1>
            <p>Barcha Tizimda mavjud O'qituvchilar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">O'qituvchilar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mb-3">
                <a class="btn btn-success" href="./teachers/create"><i class="fa fa-plus"></i> Qo'shish</a>
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
                                <th>FIO</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Fakultet</th>
                                <th>Kafedra</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $id = 1;
                            foreach ($teachers as $d) {
                                ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td><?=$d['name']?></td>
                                    <td><?=$d['email']?></td>
                                    <td>
                                        <i class="fa fa-eye-slash" id="icon" style="font-size: 20px" onclick="passwordHideOrShow()"></i>
                                        <p id="text-password" style="display: none"><?=$d['password']?></p>
                                    </td>
                                    <td><?=$f->FakultyName($d['fakulty_id'])?></td>
                                    <td><?=$k->KafedraName($d['kafedra_id'])?></td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="/teachers/delete?id=<?=$d['id']?>" method="post">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete </button>
                                            </form>
                                            <a href="/teachers/edit?id=<?=$d['id']?>" class="btn btn-info"> <i class="fa fa-edit"></i> Taxrirlash</a>
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
<script>
    function passwordHideOrShow() {
        var x = document.getElementById("text-password");
        var icon = document.getElementById('icon');
        if (x.style.display === "none") {
            x.style.display = "block";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        } else {
            x.style.display = "none";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        }
    }
</script>
</body>
</html>