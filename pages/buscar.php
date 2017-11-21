<?php
  
      $buscar = $_POST['b'];
        
      if(!empty($buscar)) {
            buscar($buscar);
      }
        
      function buscar($b) {
            $con = mysql_connect('localhost','root', 'HalfCabFlip180');
            mysql_select_db('validacion', $con);
        
            $sql = mysql_query("SELECT * FROM users WHERE nombre LIKE '%".$b."%' LIMIT 10" ,$con);
              
            $contar = @mysql_num_rows($sql);
              
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{
              while($row=mysql_fetch_array($sql)){
                $nombre = $row['nombre'];
                $email = $row['email'];
                $telefono = $row['telefono'];
                echo $nombre." ".$email." ".$telefono." <br />";
            }
        }
  }
        
?>
