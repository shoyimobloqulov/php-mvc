<?php
    use App\Controllers\HomeController;
    use App\Controllers\LoginController;
    use App\Controllers\RegisterController;
    use App\Controllers\StudentController;
    use App\Controllers\GroupController;
    use App\Controllers\DirectionController;
    use App\Controllers\FakultyController;
    use App\Controllers\UserController;

    Router::get('',HomeController::class);

    Router::get('settings',[UserController::class,'settings']);
    Router::post('user/update',[UserController::class,'update']);

    Router::get('code',[LoginController::class,'reset']);
    Router::post('code/email',[LoginController::class,'ResetCode']);

    Router::get('login',[LoginController::class,'index']);
    Router::post('login/check',[LoginController::class,'login']);

    Router::get('register',[RegisterController::class,'index']);
    Router::post('register/user',[RegisterController::class,'register']);

    Router::get('logout',[LoginController::class,'logout']);

    Router::get('reset',[LoginController::class,'resetView']);
    Router::post('code/check',[LoginController::class,'newPassword']);

    Router::get('student',[StudentController::class,'index']);
    Router::get('student/create',[StudentController::class,'create']);
    Router::get('student/edit',[StudentController::class,'edit']);
    Router::delete('student/delete',[StudentController::class,'delete']);
    Router::post('student/store',[StudentController::class,'store']);
    Router::post('student/update',[StudentController::class,'update']);

    Router::get('group',[GroupController::class,'index']);
    Router::get('group/create',[GroupController::class,'create']);
    Router::get('group/edit',[GroupController::class,'edit']);
    Router::delete('group/delete',[GroupController::class,'delete']);
    Router::post('group/store',[GroupController::class,'store']);
    Router::post('group/update',[GroupController::class,'update']);

    Router::get('direction',[DirectionController::class,'index']);
    Router::get('direction/create',[DirectionController::class,'create']);
    Router::get('direction/edit',[DirectionController::class,'edit']);
    Router::delete('direction/delete',[DirectionController::class,'delete']);
    Router::post('direction/store',[DirectionController::class,'store']);
    Router::post('direction/update',[DirectionController::class,'update']);

    Router::get('fakulty',[FakultyController::class,'index']);
    Router::get('fakulty/create',[FakultyController::class,'create']);
    Router::get('fakulty/edit',[FakultyController::class,'edit']);
    Router::delete('fakulty/delete',[FakultyController::class,'delete']);
    Router::post('fakulty/store',[FakultyController::class,'store']);
    Router::post('fakulty/update',[FakultyController::class,'update']);
