<?php

namespace App\controllers\abstractClass; 
use App\Component\HttpComponent\Response;
use App\model\orm\SuperOrm;

require_once "src/services/database/entityManager.php";


abstract class AbstractController
{

   public function getSuperOrm()
   {
      return new SuperOrm();
   }

 
   public function renderPage($page, $array) : Response
   {
      extract($array);
      ob_start();

      include "templates/base.php";
      include "templates/$page.php";

      $content = ob_get_clean();
      
      return new Response($content);

   }   


   public function getEntityManager(){

       global $entityManager;

       return $entityManager;

   }

}