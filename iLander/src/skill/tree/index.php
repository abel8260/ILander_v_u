 <?php

session_start(); 
include('../../../db/conexao.php');

require('../../offset/bs/offcommon.php');







?>

   <div class="card mb-3" style="background-color: black; max-width: 540px;">
  <div class="row g-0">

    <div class="col-md-8" style="background-color: black;">
      <div class="card-body">
        <h5 class="card-title">
                     


      
     <?php




$stmt34= $pdo-> prepare(  "SELECT * FROM `skill_bodes_imp` WHERE `bodes_bodes` = 'base'  ORDER BY bodes_id DESC LIMIT 1 ");
$stmt34-> execute();
$result34 = $stmt34-> fetchAll( PDO::FETCH_ASSOC );

foreach($result34 as  $value34) {
         



echo "<p> ".$value34["bodes_nome"]."</p>";


          
                   
                     }





?>    


    


                     
                    
                  <!---->
                  
</h5>
        <p class="card-text"> </p>
        
      </div>
    </div>
  </div>
  <hr/>

  <div class="row g-0">
    
    <div class="col-md-8" style="background-color: black;">
      <div class="card-body">
        <h5 class="card-title">Habilidade:</h5>
        <p class="card-text">      <?php




$stmt34= $pdo-> prepare(  "SELECT * FROM `skill_bodes_imp` WHERE `bodes_bodes` = 'derivada' limit 1");
$stmt34-> execute();
$result34 = $stmt34-> fetchAll( PDO::FETCH_ASSOC );

foreach($result34 as  $value34) {
         



echo "<p> ".$value34["bodes_nome"]."</p>";


          
                   
                     }





?>    </p>
        
      </div>
    </div>
  </div>
  </div>


   
    


     </body>
</html>
