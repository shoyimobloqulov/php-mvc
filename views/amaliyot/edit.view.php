<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Amaliyot Taxrirlash </h1>
            <p>Tizimga Amaliyotlarni Taxrirlash</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Amaliyot</a></li>

            <li class="breadcrumb-item"><a href="#">Qo'shish</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/amaliyot/update?id=<?=$row['id']?>" method="post">
                            <div class="form-group">
                                <label for="">Nomi</label>
                                <input class="form-control" id="" name="name" type="text" aria-describedby="emailHelp" placeholder="Name " value="<?=$row['name']?>">
                            </div>

                            <div class="form-group">
                                <label for="">Direktor</label>
                                <input class="form-control" id="" name="direktor" type="text" aria-describedby="emailHelp" placeholder="Direktor " value="<?=$row['direktor']?>">
                            </div>

                            <div class="form-group">
                                <label for="">Telefon</label>
                                <input class="form-control" id="call" name="telefon" type="text" aria-describedby="emailHelp" placeholder="Telefon " value="<?=$row['telefon']?>">
                            </div>

                            <div class="form-group">
                                <label for="">Manzil</label>
                                <input class="form-control" id="manzil" name="manzil" type="text" aria-describedby="emailHelp" placeholder="Manzil " value="<?=$row['manzil']?>">

                            </div>

                            <div class="form-group">
                                <label for="">Manzil linki</label>
                                <input class="form-control" id="link" name="link" type="text" aria-describedby="emailHelp" placeholder="Link " value="<?=$row['link']?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleSelect1">Amaliyot turi</label>
                                <select class="form-control" id="exampleSelect1" name="turi">
                                    <option value="Ped Amaliyot">Ped Amaliyot</option>
                                    <option value="Ishlab Chiqarish Amaliyoti">Ishlab Chiqarish Amaliyoti</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Boshlanish vaqti</label>
                                <input class="form-control" id="start_time" name="start_time" type="datetime-local" aria-describedby="emailHelp" placeholder="Vaqt ">
                            </div>

                            <div class="form-group">
                                <label for="">Tugash vaqti</label>
                                <input class="form-control" id="end_time" name="end_time" type="datetime-local" aria-describedby="emailHelp" placeholder="Vaqt ">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script>
    $("#call").inputmask("(99)-999-99-99");
</script>
</body>
</html>