<!DOCTYPE HTML>
<html>
 <head>
   <link rel="shortcut icon" href="ico/icon.ico" type="image/ico">

  <meta charset="utf-8">

  <title>Справочник</title>
 </head>

 <body background="image/fon.jpg">

   <form>

   <h1><u><i>Справочник</i></u></h1>
   <hr />

   <button onclick="javascript:Add();">
     <img src="ico/icPlus.png" height=15px width=15px></img>
     Добавить
   </button>

   <button onclick="phpscript:Del();">
     <img src="ico/icMinus.png" height=15px width=15px></img>
     <?php
     function Del()
     {
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
     }
     ?>
     Удалить
   </button>

   <br></br>

   <table id="phone_tab" class="sortable">

     <thead>
      <tr>
        <th width=350>
          Имя
        </th>
        <th>
          Телефон
        </th>
      </tr>
    </thead>

       <tbody>
         <?php
         $connection = mysql_connect("localhost", "dim", "123456");
         $db = mysql_select_db("myhost");
         mysql_set_charset("utf8");
         if(!$connection || !db)
         {
           exit(mysql_error());
         }
         $result = mysql_query("select name, phone, adress from Person");
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
          </tr>
         <?php }?>
     </tbody>

     <!--<tr><td width=350>данные</td><td>данные</td></tr>-->
  <style type="text/css">
    table {
      border: 3px solid black; 
      width: 600px ;
    }
    th {
      border: 3px solid black;
    }
    td {
      border: 2px solid black;
    }
     table {
      border-collapse: collapse;
    }
  </style>

</table>

<hr />

</form>
<script type="text/javascript" src="script/Script.js"></script>
 </body>
</html>
