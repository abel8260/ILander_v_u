 <?php

session_start(); 
include('../../../db/conexao.php');

require('../../offset/bs/offcommon.php');







#código do mini_sys_Dpa
$_SESSION['hist'] = 0;
$y = $_SESSION['hist'];
if($y == 0){
  $_SESSION['hist'] = 1;
}else{
  $x = $_SESSION['hist'];
  $x = $x + 1;
  $_SESSION['hist'] = $x;
}
#fim da aplicação












  



$sql14=$pdo->prepare("SELECT * FROM profiletb");
   
     $info14 = $sql14 -> fetchALL(); 
   

    $sql14-> execute();


?>

<!DOCTYPE html>


        <!--MENU-TOP--> 
            <div class="menu-top">
              <!--MENU-TOP-IND-WRAPPER-->
                <div class="menu-top-IND-wrapper">

                 
                  <!---->

                  <!--MENU-TOP-IND-WRAPPERMAODIR-->
                    <div class="menu-top-IND-wrapperMAODIR">
                     


      
     <?php




$stmt34= $pdo-> prepare(  "SELECT * FROM level_emu  ORDER BY  id_emu DESC LIMIT 1 ");
$stmt34-> execute();
$result34 = $stmt34-> fetchAll( PDO::FETCH_ASSOC );

foreach($result34 as  $value34) {
         

echo "<div class='card'>";

echo "<p> level: ".($value34["mp_max_emu"]/100)."<br/></p>";

echo "</div>";
          
                   
                     }





?>    


    


                     
                    </div>
                  <!---->
                  

                </div> 
              <!---->

              
            <!--MENU-TOP-IND-WRAPPERPERFIL-->
                   

                  <!--MENU-TOP-IND-WRAPPERMAODIR-->
                    <div class="menu-top-IND-wrapperMAODIR">
                     
<div class="row g-0">
    
    <div class="col-md-8" style="background-color: black;">
      <div class="card-body">
        <h5 class="card-title">

      
     <?php




$stmt34= $pdo-> prepare(  "SELECT * FROM level_emu  ORDER BY  id_emu DESC LIMIT 1  ");
$stmt34-> execute();
$result34 = $stmt34-> fetchAll( PDO::FETCH_ASSOC );

foreach($result34 as  $value34) {
         

echo "<div class='card'>";

echo "<p> MP: ".$value34['mp_max_emu']."</p>";

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
