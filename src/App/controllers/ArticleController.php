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


    
    public function createArticle(string $subsection, string $name) : void
    {

        try{

            $entityManager = $this->getEntityManager();

            $article = new Entity();
    
            $article->setProperty("table", "article");
            $article->setProperty("ID", 0);
            $article->setProperty("subSection", $subsection);
            $article->setProperty("name", $name);
          
            $entityManager->insert($article);


            header("Location:" . rootUrl);


    
        } catch(Exception $e) {

            echo $e->getMessage();

        }

     
    }



    public function editArticleContent(int $articleId, string $newContent)  : void
    {

        try{

            $entityManager = $this->getEntityManager();

            $article = $this->getSuperOrm()->getRepository("article")->getElementFromId($articleId);

            $article->setProperty("content", $newContent);    

            $entityManager->insert($article);

            header("Location:" . rootUrl . "article?num=$articleId");

        } catch(Exception $e)
        {
           echo $e->getMessage();
        }

    }




    public function removeArticle(int $articleId) 
    {
        try{

            $entityManager = $this->getEntityManager();
            $article = $this->getSuperOrm()->getRepository("article")->getElementFromId($articleId);
            $entityManager->remove($article);
            header("Location:" . rootUrl);

        } catch(Exception $e)
        {
           echo $e->getMessage();
        }

    }
    

}