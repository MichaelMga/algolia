<?php

 namespace App\controllers\datastructures;

 require_once 'src/autoload.php';

 use App\controllers\abstractClass\AbstractController;
 use App\component\httpComponent\Response;
 use App\model\entities\Entity;


 require_once "src/services/database/entityManager.php";




class DataStructuresController extends AbstractController
{

    public function renderIndex() : Response
    {        
        return $this->renderPage("ds/index", []);

    }

}