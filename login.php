<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\User;
use \App\Session\Login;

Login::requireLogout();

$alertLogin    = '';
$alertRegister = '';

if(isset($_POST['action'])){
    switch ($_POST['action']) {
        case 'login':
            if(isset($_POST['email'], $_POST['password'])) {
                $obUser = User::getUserByEmail($_POST['email']);
                
                if(!$obUser instanceof User || !password_verify($_POST['password'], $obUser->password)){
                    $alertLogin = 'E-mail ou senha inválidos!';
                    break;
                }                
                //echo "<pre>"; print_r($obUser); echo "</pre>"; exit;
            }
            
            Login::login($obUser);

            break;

        case 'register':
            
            if(isset($_POST['name'], $_POST['registerEmail'], $_POST['registerPassword'])) {

                $obUser = User::getUserByEmail($_POST['registerEmail']);
                
                if($obUser instanceof User){
                    $alertRegister = 'O e-mail digitado já está em uso!';
                    break;
                }                            

                $obUser = new User;
                $obUser->name     = $_POST['name'];
                $obUser->email    = $_POST['registerEmail'];
                $obUser->password = password_hash($_POST['registerPassword'], PASSWORD_DEFAULT);
                $obUser->register();
                //echo "<pre>"; print_r($obUser); echo "</pre>"; exit;

                Login::login($obUser);
            }
            break;
        
    }
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form-login.php';
include __DIR__.'/includes/footer.php';
