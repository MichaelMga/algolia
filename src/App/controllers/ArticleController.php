<?php

 namespace App\controllers;

 require_once 'src/autoload.php';

 use App\controllers\abstractClass\AbstractController;
 use App\component\httpComponent\Response;
 use App\model\entities\Entity;


 require_once "src/services/database/entityManager.php";


class ArticleController extends AbstractController
{
    
    public function rendernewArticlePage() : Response
    {
        return $this->renderPage("/articles/new", []);
    }


    
    public function createArticle(string $subsection, string $name) : Response
    {

        try{

            $entityManager = $this->getEntityManager();

            $article = new Entity();
    
            $article->setProperty("table", "article");
            $article->setProperty("ID", 0);
            $article->setProperty("subSection", $subsection);
            $article->setProperty("name", $name);
          
            $entityManager->insert($article);

            $content = "article created";
    
        } catch(Exception $e) {

            $content = $e->getMessage();

        }

        return new Response($content);
     
    }



    public function editArticleContent(string $articleId, string $newContent) : Response
    {

        try{

            $entityManager = $this->getEntityManager();

            $article = $this->getSuperOrm()->getRepository("article")->getElementFromId($articleId);

            echo $newContent;

            $article->setProperty("content", $newContent);            
            $entityManager->insert($article);

            $content = "article edited!";

        } catch(Exception $e)
        {
            $content = $e->getMessage();
        }

        return new Response($content);

    }
    

}