

<h1><?php echo $subsection ?> </h1>


<?php

 if(count($articles) > 0){

     foreach($articles as $article)
     {
        echo "<a href='" . rootUrl . "article?num=" . $article->getPropertyValue("ID") . "'>" .  $article->getPropertyValue("name") . "</a>";
        echo "</br>";
     }
 }

 ?>