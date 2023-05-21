<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Talabalar Taxrirlash </h1>
            <p>Tizimdagi Talabalar Taxrirlash</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Talabalar</a></li>

            <li class="breadcrumb-item"><a href="#">Taxrirlash</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group">
                                <label for="">FIO</label>
                                <input value="Rustam Omonov" class="form-control" id="" type="text" aria-describedby="emailHelp" placeholder=""><small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="">ID</label>
                                <input value="12345678910" class="form-control" id="" type="text" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Fakulteti</label>
                                <select class="form-control" id="demoSelect" multiple="">
                                    <optgroup label="Fakultetni tanlang">
                                        <option>Fizika</option>
                                        <option>Matematika</option>
                                        <option>Geografiya</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Yo'nalish</label>
                                <select class="form-control" id="demoSelect1" multiple="">
                                    <optgroup label="Fakultetni tanlang">
                                        <option>Dastur injenering</option>
                                        <option>Suniy intelekt</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Guruh</label>
                                <select class="form-control" id="demoSelect2" multiple="">
                                    <optgroup label="Fakultetni tanlang">
                                        <option>102-guruh</option>
                                        <option>101-guruh</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">Qo'shish</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once  __DIR__.'/../layouts/script.view.php'?>
</body>
</html>