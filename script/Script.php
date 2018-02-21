<?php
  $name = $_GET[message];

      $connection = mysql_connect("localhost", "dim", "123456");
      $db = mysql_select_db("myhost");

      mysql_set_charset("utf8");

      if(!$connection || !db)
        {
          exit(mysql_error());
        }

      mysql_query("update Person set deleted='del' where name==$name");
      
      mysql_close();
?>
