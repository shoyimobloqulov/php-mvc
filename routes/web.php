<?php
    use App\Controllers\HomeController;
    use App\Controllers\LoginController;
    use App\Controllers\RegisterController;

    Router::get('',HomeController::class);

    Router::get('code',[LoginController::class,'reset']);

    Router::get('login',[LoginController::class,'index']);
    Router::post('login/check',[LoginController::class,'login']);

    Router::get('register',[RegisterController::class,'index']);
    Router::post('register/user',[RegisterController::class,'register']);

    Router::get('logout',[LoginController::class,'logout']);