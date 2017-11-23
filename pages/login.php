<?php
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = md5($_POST['password']); 
      
      
       $con = mysql_connect('mysql7002.site4now.net:3306','litcl4wv_valida', 'ysGMhg3RcZQZZuvkmEhM');
       mysql_select_db('litcl4wv_validacion', $con);
        
            $sql = mysql_query("SELECT iduser FROM users WHERE email = '$myusername' and password = '$mypassword'" ,$con);
              
            $contar = @mysql_num_rows($sql);
		
      if($contar==1) {
        //session_start();
        //session_register("myusername");
        //$_SESSION['login_user'] = $myusername;
        //print_r($_SESSION);
        echo '<meta http-equiv="refresh" content="0;url=buscar.html" />';
      }else {
         echo $error = "Su usuario o contraseña no son validos";
      }
?>