<?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("arifpharmacy", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM v_manager ");
      ?>
	  
	  
	  <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['Man_id']}</td>
              <td>{$row['Man_name']}</td>
              <td>{$row['Man_address']}</td>
              <td>{$row['Man_contact']}</td> 
            </tr>\n";
          }
        ?>	