<!doctype html>
<html lang="en">
<?php include_once  __DIR__.'/../layouts/head.view.php'?>
<body>
<?php include_once  __DIR__.'/../layouts/navbar.view.php'?>
<?php include_once  __DIR__.'/../layouts/sidebar.view.php'?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Talabalar</h1>
            <p>Barcha Tizimda mavjud Talabalar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Talabalar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mb-3">
                <a class="btn btn-success" href="./fakulty/create"><i class="fa fa-plus"></i> Qo'shish</a>
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
                                <th>ID</th>
                                <th>FIO</th>
                                <th>Guruh</th>
                                <th>Yo'nalish</th>
                                <th>Fakulteti</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Matematika-213</td>
                                <td>Amaliy Matematika</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="student-edit.html">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" id="demoSwal" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>12345678910</td>

                                <td>Rustam Omonov</td>
                                <td>Matematika-213</td>
                                <td>Tiger Nixon</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="student-edit.html">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Matematika-213</td>
                                <td>Garrett Winter</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="student-edit.html">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Dasturlash-213</td>
                                <td>Ashton Cox</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="student-edit.html">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>

                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Dasturlash-213</td>
                                <td>Cedric Kelly</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="student-edit.html">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>

                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Dasturlash-213</td>
                                <td>Matematika Fakulteti</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="student-edit.html">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>

                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Dasturlash-213</td>
                                <td>Brielle Williamson</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="student-edit.html">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>

                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Dasturlash-213</td>
                                <td>Herrod Chandler</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="student-edit.html">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>

                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Dasturlash-213</td>
                                <td>Tiger Nixon</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="student-edit.html">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>

                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Dasturlash-213</td>
                                <td>Garrett Winter</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>11</td>

                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Dasturlash-213</td>
                                <td>Tiger Nixon</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>

                                <td>12345678910</td>
                                <td>Rustam Omonov</td>
                                <td>Dasturlash-213</td>
                                <td>Garrett Winter</td>
                                <td>Fizika fakulteti</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="student-edit.html">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" href="#">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

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