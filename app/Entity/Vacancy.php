<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

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
        $this->id = $obDatabase->insert([
                                            'title'         => $this->title,
                                            'description'   => $this->description,
                                            'active'        => $this->active,
                                            'date'          => $this->date
                                        ]);
        //echo "<pre>"; print_r($this); echo "</pre>"; exit;
        return true;
    }

    public function update() {
        return (new Database('vagas'))->update('id = '.$this->id, [
                                                                    'title'         => $this->title,
                                                                    'description'   => $this->description,
                                                                    'active'        => $this->active,
                                                                    'date'          => $this->date
                                                                ]);            
    }

    public function remove() {
        return (new Database('vagas'))->delete('id = '.$this->id);            
    }
    
    public static function getVacancies($where = null, $order = null, $limit = null) {
        return (new Database('vagas'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getVacancy($id) {
        return (new Database('vagas'))->select('id = '.$id)
                                      ->fetchObject(self::class);
    }
}