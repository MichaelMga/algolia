

<h1><?php echo $subsection ?> </h1>


<?php

 if(count($articles) > 0){

     foreach($articles as $article)
     {
        echo $article->getPropertyValue("name");
        echo "</br>";
     }
 }

 ?>