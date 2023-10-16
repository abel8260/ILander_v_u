<!DOCTYPE html>
  <html>

  <?php

session_start(); 
include('../../../db/conexao.php');

require('../../offset/bs/offcommon.php');



 
    echo "<hr/>";
    echo "<p> Lista de atividades:</p>" ;
    $sql=$pdo->prepare("SELECT * FROM `mons_tool_mt` ");
    
    echo "<div class='links'>";
    echo "<a class= 'voltar' href='key_473.php'>voltar</a>";
    echo "<br/>";

    $sql-> execute();

    $clientes = $sql -> fetchALL(); 

    foreach ($clientes as $key => $value ){

       echo "<hr/>";
       echo "<br/>";
       echo "Boss_id: ".$value['id_mt'];
       echo "<br/>";
       echo "Porcentagem de life do boss: ".($value['hps_mt']-$value['mps_mt']);
       echo "<br/>";
       echo "Boss_nome: ".$value['nome_mt'];

       echo "<br/>";
     
       echo "<hr/>";
       echo "<hr/>";
       echo "<p>==>  <img src='".$value['img_mt']."' width='70px' height='70px'/></p>";
       echo "<p>==>  Desafio: ".$value['nome_mt']."</p>";
       echo "<br/>";
       echo "==> HP:/MP:/( ".$value['hps_mt']." / ".$value['mps_mt'].")";
       echo " <progress id='file' max='".$value['hps_mt']."' value='".$value['mps_mt']."'></progress>";
       echo "<br/>";
      echo "<br/>";
     
       echo "<br/>";
     

       
      
    
      }
        
      
    ?>



   

  
<hr/>






  
    </body>


  </html> 