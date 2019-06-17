<?php
namespace App\Controller;
use App\Controller\AppController;



class FileController extends AppController
{

    public function display()
    {

        $house = TableRegistry::get('house');
        $query = $house->find();




        $this->set('house',$query);

    }

}