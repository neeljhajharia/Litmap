<html> <!-- view -- original file-->
<br>
      <head><center><strong><h3>ACCOUNTS SECTION<h3></strong></center>
        <style>.error { color: #FF0000; }</style>
      </head>
      <body bgcolor="#B1B985">

          <center><h4>BALANCE SHEET</h4></center>

     </body>
</html>
<center>
<?php //view
    ini_set('display_errors', '1');
    require_once 'connection.php';
      $sql = "select *from balance_sheet";
      $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result))
              {
                echo "<table border='2' style='width:80%'>";
                echo "<center>";
                echo "<tr><th>SR_NO</td><th>DATE</td><th>STATEMENT</td><th>CREDIT</td><th>DEBIT</td><th>BALANCE</td><th>REMARK</td></tr>";
                while($row= mysqli_fetch_assoc($result))
                {
                 $SR_NO=$row["SR_NO"];
                 $DATE=$row["DATE"];
                 $STATEMENT=$row["STATEMENT"];
                 $CREDIT=$row["CREDIT"];
                 $DEBIT=$row["DEBIT"];
                 $BALANCE=$row["BALANCE"];
                 $REMARK=$row["REMARK"];
                 
                 echo "<tr><th>".$SR_NO."</td><td>".$DATE."</td><td>".$STATEMENT."</td><td>".$CREDIT."</td><td>".$DEBIT."</td><td>".$BALANCE."</td><td>".$REMARK."</td></tr>";
                }
               echo"</table>";
               echo "<center/>";
             } 
?>
<center>
<html>
 <body>
<br><br><center><a href= Index_balance.php>CLICK HERE TO GET BALANCE SHEET IN SPREADSHEET FORMAT</a></center><br><br>
<br><br><center><a href= accounts.php>BACK TO ACCOUNTS</a></center><br><br>
 </body>
</html>
