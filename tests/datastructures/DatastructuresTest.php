<?php

 require "src/autoload.php";

 use PHPUnit\Framework\TestCase;
 use App\controllers\datastructures\DataStructuresController;



  final class DatastructuresTest extends TestCase
  {

    /**
     * @test
     */

    public function canIreachController()
    {
        $controller = new DataStructuresController();
        $this->assertInstanceOf(DataStructuresController::class, $controller);
    }

  }