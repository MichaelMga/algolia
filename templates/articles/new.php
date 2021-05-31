   
   <h1>Créer article</h1>


   <form action="<?php echo rootUrl ?>dbNewArticle" method="post">


      <select name="section">
         <option>Section</option>
         <option>algorithms</option>
         <option >architecture</option>

      </select>


      
      <select name="subsection">
         <option value="Subsection">SubSection</option>
         <option>(Algorithms ) : </option>
         <option name="strings">Strings</option>
         <option name="trees">Trees</option>
         <option name="sorting" >Sorting</option>
         <option name="miscellaneous" >Miscellaneous</option>

         <option>(Architecture ) : </option>
         <option name="cleanCode">Clean code</option>
         <option name="SOLID">SOLID</option>
         <option name="designPatterns">Design patterns</option>
      </select>


      <input type="text" placeholder="name">
      

      <input type="submit" value="Create">
   
   
   </form>

