<?php
<<<<<<< HEAD
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
=======
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT iduser FROM users WHERE email = '$myusername' and password = md5('$mypassword')";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         echo $error = "Your Login Name or Password is invalid";
      }
   }
>>>>>>> a6d354774fe64fd2c81ac0bba68df60e864518c0
?>