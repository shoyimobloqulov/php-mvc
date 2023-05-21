<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Guruh taxrirlash </h1>
            <p>Tizimdagi Guruh taxrirlash</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Guruh</a></li>

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
                                <label for="">Nomi</label>
                                <input value="Intelektual-901-56" class="form-control" id="" type="text" aria-describedby="emailHelp" placeholder="Name email"><small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
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