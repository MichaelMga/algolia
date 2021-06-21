<html>

  <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href= "public/assets/main.css">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">   
  </head>


   <body>
  
     <header> 
     
       <div id="navBar">

  

        <div id="navLinkLeft">
               <a id="navLink" href="<?php echo rootUrl?>"></a>
                <div id="navbarLogo"><img src="public/assets/images/books.png" alt=""></div>
                <div id="navbarName"><h3>Algolia</h3></div>

         </div>

        <div id="navLinkRight">

            <div><a href="<?php echo rootUrl?>algo">Algorithmes</a></div>
            
                <div><a href="<?php echo rootUrl?>ds">Datastructure</a></div>
                <div><a href="<?php echo rootUrl?>architecture">Architecture</a></div>

           <?php 

             if((isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)){

                echo "<a href='" . rootUrl . "logout'><button>logout</button></a>";

                echo "<a href='" . rootUrl . "newArticle'><button>create article</button></a>";

             }

          ?> 
                  
       </div> 

    </div>





    </header>


   <main>
   


   <script>



 



   </script>