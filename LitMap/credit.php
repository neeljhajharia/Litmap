<?php 
    ini_set('display_errors', '1');
    require_once 'connection.php';

    if(!empty($_POST['DATE']) && !empty($_POST['STATEMENT']) && !empty($_POST['CREDIT']) && !empty($_POST['REMARK']))
    {
     $DATE=$_POST['DATE'];
     $STATEMENT=$_POST['STATEMENT'];
     $CREDIT=$_POST['CREDIT'];
     $REMARK=$_POST['REMARK'];
     $qry = "INSERT INTO balance_sheet (DATE,STATEMENT,CREDIT,REMARK) VALUES ('$DATE','$STATEMENT','$CREDIT','$REMARK')";
     $result = mysqli_query($conn,$qry);
     

         
     
     if($result) 
      header('Location:accounts.php');
     echo "Error: " . "<br>" . mysqli_error($conn);

   }   
?>

<html>
      <head>
        <style>.error { color: #FF0000; }
        <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
        </style>
        <title>Welcome to LITMAP</title>
      </head>
      <body bgcolor="#B1B985">
            <br><br><br><br><br><br><br><br><br>
            <center><h2>ACCOUNTS SECTION </h2></center>
            <center>
             <form name="addition" method ="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
               <input type="date" name="DATE" placeholder="DATE yyyy-mm-dd"><br><br>
               <input type="text" name="STATEMENT" placeholder="STATEMENT OF PURPOSE"><br><br>
               <input type="number" name="CREDIT" placeholder="CREDIT AMOUNT" step="0.01"/><br><br>
               <input type="text" name="REMARK" placeholder="REMARK"><br><br>
               <input type="submit" value="Submit">
             </form>
            </center>

             <br><br><center><a href= accounts.php>BACK TO ACCOUNTS SECTION</a></center><br><br>

     </body>
</html>
