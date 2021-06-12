
<h1><?php echo $subsection ?> </h1>


<div id="subSectionContainer">


  <?php

   if(count($articles) > 0){

     foreach($articles as $article)
     {

        echo "<div class='subSectionContainerA'><a href='" . rootUrl . "article?num=" . $article->getPropertyValue("ID") . "'>" .  $article->getPropertyValue("name") . "</a></div>";

        if($admin){

            echo "<a href='" . rootUrl . "removeArticle?num=" . $article->getPropertyValue("ID") . "'><button>Delete article</button></a>";
        
        }


     }

   }
 ?>



</div>