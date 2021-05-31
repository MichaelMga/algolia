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

    
    public function newArticlePage() : Response
    {
        return $this->renderPage("/articles/new", []);
    }
    

    public function renderSection(string $section) : Response
    {
        return $this->renderPage("$section/index", []);
    }


    public function renderSubSection(string $section, string $subsection) : Response
    {
        $articles = $this->getSuperOrm()->getRepository("article")->getAllElementsFromProperty("subSection" , $subsection);

        return $this->renderPage("subsection/show", ["subsection" => $subsection ,  "articles" => $articles] );
    }


    public function renderArticle(int $articleId) : Response
    {
        $article = $this->getSuperOrm()->getRepository("article")->getElementFromId($articleId);

        if($article != false)
        {
            return $this->renderPage("articles/show", ["article" => $article]);

        } else {

            header('Location:' . rootUrl);
        }

    }


}