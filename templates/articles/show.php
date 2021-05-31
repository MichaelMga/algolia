
<h1> Here is your article </h1>



<?php

  if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true )
  {

    echo "<form>
            <textarea  rows='100' cols='175'>" . $article->getPropertyValue("content") . "</textarea>

            <input type='submit' value='edit'>
       </form>";


    echo "</br>";

    echo "Result :";

  }



        echo $article->getPropertyValue("content");
 



 ?>