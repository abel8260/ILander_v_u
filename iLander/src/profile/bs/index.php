 <?php

session_start(); 
include('../../../db/conexao.php');

require('../../offset/bs/offcommon.php');








  



$sql14=$pdo->prepare("SELECT * FROM profiletb");
   
     $info14 = $sql14 -> fetchALL(); 
   

    $sql14-> execute();


?>


        <!--MENU-TOP--> 
            <div class="menu-top">
              <!--MENU-TOP-IND-WRAPPER-->
                <div class="menu-top-IND-wrapper">

                  <!--MENU-TOP-IND-WRAPPERPERFIL-->
                    <div class="menu-top-IND-wrapperPERFIL">
      

          
     <?php




$stmt5= $pdo-> prepare( "SELECT * FROM profiletb  ORDER BY  id_tb DESC LIMIT 1 ");
$stmt5-> execute();
$result5 = $stmt5-> fetchAll( PDO::FETCH_ASSOC );

foreach($result5 as  $value5) {
         

echo "<div class='card'>";

echo "<img class='elmo' src='".$value5["img_tb"]."'/>";

echo "</div>";
          
                   
}





?>              
                     
                    </div>
                  <!---->

                  <!--MENU-TOP-IND-WRAPPERMAODIR-->
                    <div class="menu-top-IND-wrapperMAODIR">
                     


      
     <?php




$stmt34= $pdo-> prepare(  "SELECT * FROM profiletb  ORDER BY  id_tb DESC LIMIT 1 ");
$stmt34-> execute();
$result34 = $stmt34-> fetchAll( PDO::FETCH_ASSOC );

foreach($result34 as  $value34) {
         

echo "<div class='card'>";

echo "<p> ".$value34["user_tb"]."</p>";

echo "</div>";
          
                   
                     }





?>    


    


                     
                    </div>
                  <!---->
                  

                </div> 
              <!---->

              
            <!--MENU-TOP-IND-WRAPPERPERFIL-->
                    <div class="menu-top-IND-wrapperPERFIL">
      

          
     <?php




$stmt5= $pdo-> prepare( "SELECT * FROM profiletb  ORDER BY  id_tb DESC LIMIT 1 ");
$stmt5-> execute();
$result5 = $stmt5-> fetchAll( PDO::FETCH_ASSOC );

foreach($result5 as  $value5) {
         

echo "<div class='card mb-3'>";

echo "<img class=' mb-3' src='".$value5['toplevel_tb']."/>";

echo "</div>";
          
                   
}





?>              
                     
                    </div>
                  <!---->

                  <!--MENU-TOP-IND-WRAPPERMAODIR-->
                    <div class="menu-top-IND-wrapperMAODIR">
                     
<div class="row g-0">
    <div class="col-md-4">
      <img src="../../static/npcs2/ozion7.png" >
    </div>
    <div class="col-md-8" style="background-color: black;">
      <div class="card-body">
        <h5 class="card-title">

      
     <?php




$stmt34= $pdo-> prepare(  "SELECT * FROM profiletb  ORDER BY  id_tb DESC LIMIT 1 ");
$stmt34-> execute();
$result34 = $stmt34-> fetchAll( PDO::FETCH_ASSOC );

foreach($result34 as  $value34) {
         

echo "<div class='card'>";

echo "<p> Level: ".$value34['level_tb']."</p>";

echo "</div>";
          
                   
                     }





?>    
</h5>
        <p class="card-text"> </p>
        
      </div>
    </div>
  </div>

    


                     
                    </div>
                  <!---->
                  

                </div> 
              <!---->

             


    </div>





     
  </body>
</html>

<!--
      
      Inventário</p></a>
      Lideres</p></a>
      Shops</p></a>
      Missões</p></a>-->
