


<div id="subSectionContainer">


  <?php

   if(count($articles) > 0){

     foreach($articles as $article)
     {

        echo "<div class='subSectionContainerA'>

                 <div class='subSectionContainerAA'>
                     <a href='" . rootUrl . "article?num=" . $article->getPropertyValue("ID") . "'>" .  $article->getPropertyValue("name") . "</a>
                 </div>

                 <div class='subSectionContainerAB'>

                     <a href='" . rootUrl . "article?num=" . $article->getPropertyValue("ID") . "'><img src='public/assets/images/notebook.png'></a>

                                    </div>
               
             </div>";

        if($admin){

            echo "<a href='" . rootUrl . "removeArticle?num=" . $article->getPropertyValue("ID") . "'><button>Delete article</button></a>";
        
        }


     }

   }
 ?>



</div>