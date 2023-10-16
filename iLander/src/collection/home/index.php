
<?php

session_start(); 
include('../../../db/conexao.php');

require('../../offset/bs/offcommon.php');
?>


  
  


  
  



    </a><br>
    
   <div class="card mb-3" style="background-color: black; max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../../static/npcs2/ozion7.png" >
    </div>
    <div class="col-md-8" style="background-color: black;">
      <div class="card-body">
        <h5 class="card-title">Livro meta:</h5>
        <p class="card-text"> </p>
        
      </div>
    </div>
  </div>
  <hr/>

  <div class="row g-0">
    <div class="col-md-4">
      <img src="../../static/npcs2/ozion7.png" >
    </div>
    <div class="col-md-8" style="background-color: black;">
      <div class="card-body">
        <h5 class="card-title">Top livro:</h5>
        <p class="card-text"> </p>
        
      </div>
    </div>
  </div>
  </div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">no.</th>
      <th scope="col">capa</th>
      <th scope="col">nome</th>
      <th scope="col">mp ganho</th>
      
    </tr>
  </thead>
  <tbody>





    
    



    <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    
    //Receber o número da página
    $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);   
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    
    //Setar a quantidade de itens por pagina
    $qnt_result_pg = 10;
    
    //calcular o inicio visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
    
    


$result_usuarios= $pdo-> prepare( "SELECT * FROM `mol_path` WHERE `mol_mol` = 'libros'  ORDER BY mol_mp_earned desc LIMIT $qnt_result_pg OFFSET $inicio");
$result_usuarios-> execute();
$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_usuario) {
         


echo "<form action='key_12enemy3_bck.php' method='POST'>";
      echo "<div class='buttoin'>";
            echo "<div class='card-content'>";
            echo "<div class='content'>";
     
           

          echo "<tr>";
          echo "<td scope='row'>".$row_usuario['mol_id']."</td>";
          echo "<td><img style='width:40px;height:40px' src=".$row_usuario['mol_img']."></td>";

          echo "<td>" .$row_usuario["mol_nome"]. "</td>";
      
         
         
 echo "</div>";
            echo "</div>";
            echo "<div class='buttons'>";
       
      echo "</div>";
            echo "</div>";

           
         
      echo "</form>";
            
        
         

























           
    }
     //Paginção - Somar a quantidade de usuários
    $result_pg= $pdo-> prepare( "SELECT COUNT(mol_id) AS num_result FROM `mol_path` WHERE `mol_mol` = 'libros'");
    $result_pg-> execute();
$resultado_pg = $result_pg-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_pg as   $row_pg ) {      
    
   
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
    
   
    $max_links = 2;

       echo "<nav aria-label='Page navigation example'>";
        echo "<ul class='pagination justify-content-center'>";
    
     echo " <a href='key_12fusionboss.php?pagina=1'class='page-link' aria-label='Goto page 1'>1</a>";
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
      if($pag_ant >= 1){

        echo "<li class='page-item'><a class='page-link' href='key_12fusionboss.php?pagina=$pag_ant' > Prev:".$pag_ant."</a></li>";
      }
    }
     
  
    echo "<li class='page-item'><a class='page-link' aria-current='page'>Pagina local: ".$pagina." </a></li> ";
    
    
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
      if($pag_dep <= $quantidade_pg){
        echo "<li class='page-item'><a class='pagination-next' href='key_12fusionboss.php?pagina=$pag_dep'>'$pag_dep'</a> ";
      }
    }
    
    
     

    echo "<li class='page-item'><a class='page-link' href='key_12fusionboss.php?pagina=$quantidade_pg' class='page-link' aria-label='Goto page 86'>Ultima</a></li>";

 
      echo "</ul>";
        echo "</nav>";
  
  
 
 
}
 ?>
   

   
    


     </body>
</html>
