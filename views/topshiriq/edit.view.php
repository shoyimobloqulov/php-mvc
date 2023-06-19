<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Topshiriq Qo'shish </h1>
            <p>Tizimdagi Topshiriq Qo'shish</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Topshiriq</a></li>

            <li class="breadcrumb-item"><a href="#">Qo'shish</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/topshiriq/update?id=<?=$row['id']?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleTextarea">Topshiriq haqida</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3" name="izoh"><?=$row['izoh']?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Fakulteti</label>
                                <select class="form-control" id="fakulty_id" name="fakulty_id">
                                    <optgroup label="Fakultetni tanlang"></optgroup>
                                    <?php
                                    foreach ($fakultet as $f){
                                        ?>
                                        <option value="<?=$f['id']?>"><?=$f['name']?></option>
                                        <?
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Yunalish</label>
                                <select class="form-control" id="yunalish_id" name="direction_id">

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Guruh</label>
                                <select class="form-control" id="guruh_id" name="guruh_id">
                                    <optgroup label="Guruhni tanlang"></optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">File </label>
                                <input class="form-control-file" id="" type="file" name="file" aria-describedby="fileHelp">
                            </div>

                            <div class="form-group">
                                <label for="">Topshirish vaqti</label>
                                <input class="form-control" id="dedline" value="<?=$row['dedline']?>" name="dedline" type="datetime-local" placeholder="Tugash vaqti">
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

<script>
    $("#fakulty_id").change(function (){
        var id = $("#fakulty_id").val();

        $.ajax({
            method:"get",
            url:"/../../api/yunalish",
            data: "id=" + id,
            dataType:"json",
            success:function (x){
                var text = `<optgroup label="Yo'nalish tanlang"></optgroup>`;
                x.forEach(element => {
                    text += `
                       <option value="${element['id']}">${element['name']}</option>
                    `;
                });

                $("#yunalish_id").html(text);
            }
        })
    });

    $("#yunalish_id").change(function (){
        var direction_id = $("#yunalish_id").val();
        var fakulty_id = $("#fakulty_id").val();
        $.ajax({
            method:"get",
            url:"/../../api/guruh",
            data: "fakulty_id=" + fakulty_id + "&direction_id="+direction_id,
            dataType:"json",
            success:function (x){
                var text = `<optgroup label="Guruhni tanlang"></optgroup>`;
                x.forEach(element => {
                    text += `
                       <option value="${element['id']}">${element['name']}</option>
                    `;
                });

                $("#guruh_id").html(text);
            }
        })
    });

</script>
</body>
</html>