   
   <h1>Créer article</h1>


   <form action="<?php echo rootUrl ?>dbNewArticle" method="post">

      
      <select name="subsection">
         <option>SubSection</option>
         <option>(Algorithms) : </option>
         <option name="strings">Strings</option>
         <option name="trees">trees</option>
          <option name="trees">graphs</option>
         <option name="sorting" >Sorting</option>
         <option name="miscellaneous" >Miscellaneous</option>
         <option>(datastructures) : </option>
         <option name="linkedLists">Linked lists</option>
         <option name="arrays">Arrays</option>
         <option name="stacks">stacks</option>
         <option name="queues">Queues</option>
         <option name="heaps">heaps</option>
         <option>(Architecture) : </option>
         <option name="cleanCode">Clean code</option>
         <option name="SOLID">SOLID</option>
         <option name="designPatterns">Design patterns</option>
      </select>


      <input type="text" name="name" placeholder="name">


      <input type="submit" value="Create">
   
   
   </form>

