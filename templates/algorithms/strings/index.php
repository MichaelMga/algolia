
<h1>Strings</h1>


<?php 

 foreach ($articles as $article)
 {
    echo $article->getPropertyValue("content");

 }

?>