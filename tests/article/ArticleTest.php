<?php

 require "src/autoload.php";

 use PHPUnit\Framework\TestCase;
 use App\controllers\FrontController;
 use App\controllers\ArticleController;




  final class ArticleTest extends TestCase
  {

    /**
     * @test
     */

    public function canIreachArticleFromSubsection()
    {
        $controller = new FrontController();

        $controller->renderSubSection("strings");
    }



    
    /**
     * @test
     */

    public function canIeditArticle()
    {
        $controller = new ArticleController();

        $content = "
        Bellman Ford algorithm differs to Dijkstras algorithm, in the fact that it actually can handle negative weights. 
      
        However, it doesnt work with negative cycles.
      
      
        Bellman ford is about 2 steps :
      
      
        Make a traversal order 
      
        Repeat this traversal as many times as there are nodes (relaxing nodes every time).";


        $controller->editArticleContent(13, $content);






    }

  }


