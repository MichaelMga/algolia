<html>

  <head>
       <meta charset="UTF-8">
       <link rel="stylesheet" href= "public/assets/main.css">
  </head>

   <body>
  
     <header> 
     
       <div id="navBar">

         <?php 

            if((isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)){

              echo "<a href='" . rootUrl . "logout'><button>logout</button></a>";

              echo "<a href='" . rootUrl . "newArticle'><button>create article</button></a>";


            }

         ?>

         <a href="<?php echo rootUrl?>algo"><button>algorithmes</button></a>
         <a href="<?php echo rootUrl?>ds"><button>Datastructure</button></a>
         <a href="<?php echo rootUrl?>architecture"><button>architecture</button></a>                  
       </div>
    </header>


   <main>
   
