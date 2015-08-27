<?php
//connect to pizza DB with no pass.
//I will include screen shots of DB as the DB may not be online
      $conn = mysql_connect('localhost', 'root', '');
      $db   = mysql_select_db('pizza');
?>