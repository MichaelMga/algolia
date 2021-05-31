<?php

 require "src/autoload.php";

 use PHPUnit\Framework\TestCase;
 use App\controllers\FrontController;



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

  }