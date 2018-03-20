<?php session_start;?>
<?php
function show_table()
{
         $connection = mysql_connect("localhost", "dim", "123456");
         $db = mysql_select_db("myhost");
         mysql_set_charset("utf8");
         if(!$connection || !db)
         {
           exit(mysql_error());
         }
         $user_name = $_SESSION['user_name'];
         $query = "SELECT name, phone, adress FROM `Person` WHERE `user_name`= '$user_name' AND is_del is null ORDER BY name";
         $result = mysql_query($query);
         mysql_close();
         while($row = mysql_fetch_array($result))
         {?>
          <tr>
            <td>
              <?php echo $row['name'];?>
            </td>
            <td>
              <?php echo $row['phone'];?>
            </td>
            <td>
              <?php echo $row['adress'];?>
            </td>
          </tr>
         <?php }
       }
?>