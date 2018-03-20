<?php
session_start();
if(isset($_POST['login']))
{
  $user_name = $_POST['username'];
  $_SESSION['user_name'] = $user_name;
  $user_pass = $_POST['userpass'];
  $connection = mysql_connect("localhost", "dim", "123456");
  $db = mysql_select_db("myhost");
  mysql_set_charset("utf8");
  $query = "SELECT user_name, user_pass FROM Users WHERE user_name = '$user_name' AND user_pass =  '$user_pass'";
  $result = mysql_query($query);
  mysql_close();
  if(mysql_num_rows($result) == 0)
  {
    $_SESSION['user_name'] = null;
    $user_pass = null;
    header("Refresh:1; URL=http://myhost/index.html");
    echo "Error: invalid login or password";
  }
  else
  {
    header("Refresh:1; URL=http://myhost/index.html");
    echo "Login....";
  }
}

 if(isset($_POST['del_but']))
     {
      $name = $_POST['name'];
      $connection = mysql_connect("localhost", "dim", "123456");
      $db = mysql_select_db("myhost");
      mysql_set_charset("utf8");
      if(!$connection || !$db)
        {
          exit(mysql_error());
        }
      mysql_query("UPDATE Person SET is_del='yes' WHERE name='$name'");
      mysql_close();
      header("Location:http://myhost/index.html");
      echo $user_name;
     }

  if(isset($_POST['add_but']))
     {
      $connection = mysql_connect("localhost", "dim", "123456");
      $db = mysql_select_db("myhost");
      mysql_set_charset("utf8");
      if(!$connection || !$db)
        {
          exit(mysql_error());
        }
      $n = $_POST['nameadd'];
      $p = $_POST['phone'];
      $a = $_POST['adress'];
      $user_name = $_SESSION['user_name'];
      mysql_query("INSERT INTO Person(name, phone, adress, user_name) VALUES ('$n', '$p', '$a', '$user_name')");
      mysql_close();
      header("Location:http://myhost/index.html");
     }

if(isset($_POST['logout']))
{
  session_destroy();
  header("Location:http://myhost/index.html");
}
?>