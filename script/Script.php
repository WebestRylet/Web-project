<?php
function DelReq($name){
  $name = $_GET[message];

      $connection = mysql_connect("localhost", "dim", "123456");
      $db = mysql_select_db("myhost");

      mysql_set_charset("utf8");

      if(!$connection || !db)
        {
          exit(mysql_error());
        }

      mysql_query("delete from Person where name=$name");

      mysql_close();
    }
?>
