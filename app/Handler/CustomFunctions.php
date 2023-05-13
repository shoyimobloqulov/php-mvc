<?php
    function checkLogin(){
        session_start();
        if (isset($_SESSION) and isset($_SESSION['login-success']) and isset($_SESSION['date'])){
            return 1;
        }
        return 0;
    }