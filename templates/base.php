<html>

  <head>
       <meta charset="UTF-8">
       <link rel="stylesheet" href= "public/assets/main.css">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">   
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

        <div>
           <a href="<?php echo rootUrl?>algo">algorithmes</a>
           <a href="<?php echo rootUrl?>ds">Datastructure</a>
           <a href="<?php echo rootUrl?>architecture">architecture</a>
       </div>
    </header>


   <main>
   
