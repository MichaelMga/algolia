<?php

 require "src/autoload.php";

 use PHPUnit\Framework\TestCase;
 use App\controllers\algorithms\AlgorithmsController;




  final class AlgorithmsTest extends TestCase
  {

    /**
     * @test
     */

    public function canIreachController()
    {
        $controller = new AlgorithmsController();
        $this->assertInstanceOf(AlgorithmsController::class, $controller);
    }


  }