<?php
 $server="servidor de la base de datos";
 $database = "nombre de la base de datos";
 $db_user = "usuario de la base de datos";
 $db_pass = "contraseña de la base de datos";
?>

<?php
   include("config.php") ;
   mysql_connect($server, $db_user, $db_pass) or die ("error1".mysql_error());
   mysql_select_db($database) or die ("error2".mysql_error());
   mysql_query ("INSERT INTO `nombredelabasededatos`.`COMENTARIOS` (`NAME`, `EMAIL`, `COMMENT`, `ENTRY`) VALUES ('$_POST[NAME]', '$_POST[EMAIL]', '$_POST[COMMENT]', '$_POST[ENTRY]') "); 

   $url = $_POST[URL];
   header ("Location:$url");
   exit();
?>