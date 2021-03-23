<?php

namespace App\Entity;

use \App\Db\Database;

class Vacancy {
    public $id;
    public $title;
    public $description;
    public $active;
    public $date;

    public function register() {
        $this->date = date('Y-m-d H:i:s');

        $obDatabase = new Database('vagas');
        //echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;
        $obDatabase->insert([
                                'title'         => $this->title,
                                'description'   => $this->description,
                                'active'        => $this->active,
                                'date'          => $this->date
                            ]);
            
        
    }
}