<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class User {
    public $id;
    public $name;
    public $email;
    public $password;

    public function register() {
        $obDatabase = new Database('usuarios');

        $this->id = $obDatabase->insert([
            'name'      => $this->name,
            'email'     => $this->email,
            'password'  => $this->password
        ]);

        return true;
    }

    public static function getUserByEmail($email){
        return (new Database('usuarios'))->select('email = "'.$email.'"')->fetchObject(self::class);
    }
}