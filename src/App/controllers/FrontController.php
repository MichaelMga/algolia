<?php

 namespace App\controllers;

 require_once 'src/autoload.php';

 use App\controllers\abstractClass\AbstractController;
 use App\component\httpComponent\Response;
 use App\model\entities\Entity;


 require_once "src/services/database/entityManager.php";




class FrontController extends AbstractController
{

    public function renderHome() : Response
    {
        return $this->renderPage("home", []);

    }
    

    public function renderSection(string $section) : Response
    {
        return $this->renderPage("$section/index", []);

    }


    public function renderSubSection(string $subsection) : Response
    {
        return $this->renderPage("$section/$subsection", []);

    }

}