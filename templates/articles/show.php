
<h1> <?php echo $article->getPropertyValue("name") ?> </h1>



<?php

  if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true )
  {

    echo "<form method='post' action='" . rootUrl .  "dbEditArticleContent'>

            <input name='id' type='hidden' value='" .  $article->getPropertyValue("ID")  . "'>" .
            
            "<textarea name='content' rows='100' cols='175'>" . urldecode($article->getPropertyValue("content")) . 

            "</textarea>

            <input type='submit' value='edit'>
       </form>";


    echo "</br>";

    echo "Result :";

  }



        echo urldecode($article->getPropertyValue("content"));
 



 ?>





 </main>

 </body>

 </html>