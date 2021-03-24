<?php

namespace App\Session;

class Login {

    private static function init() {
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    public static function getUserLogged() {
        self::init();

        return self::isLogged() ? $_SESSION['user'] : null;
    }

    public static function login($obUser) {
        self::init();
        $_SESSION['user'] = [
            'id'    => $obUser->id,
            'name'  => $obUser->name,
            'email' => $obUser->email
        ];

        header('location: index.php');
        exit;
    }

    public static function logout() {
        self::init();

        unset($_SESSION['user']);
        header('location: login.php');
        exit;
    }

    public static function isLogged() {
        self::init();
        
        return isset($_SESSION['user']['id']);
    }

    public static function requireLogin() {
        if(!self::isLogged()){
            header('location: login.php');
            exit;
        }
    }

    public static function requireLogout() {
        if(self::isLogged()){
            header('location: index.php');
            exit;
        }
    }

}