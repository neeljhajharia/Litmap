<?php  //original 
    ini_set('display_errors', '1');
    require_once 'connection.php';

    if(!empty($_POST['S_ID']) && !empty($_POST['FATHER_NAME']) && !empty($_POST['AGE_F']) && !empty($_POST['QUALIFICATION_F']) && !empty ($_POST['OCCUPATION_F']) && !empty($_POST['ANNUAL_INCOME_F']) && !empty($_POST['MOTHER_NAME']) && !empty($_POST['AGE_M']) && !empty($_POST['QUALIFICATION_M']) && !empty ($_POST['OCCUPATION_M']) && !empty($_POST['ANNUAL_INCOME_M']) && !empty($_POST['RESIDENTIAL_ADDRESS']) )
    {
     $S_ID=$_POST['S_ID'];
     $FATHER_NAME=$_POST['FATHER_NAME'];
     $AGE_F=$_POST['AGE_F'];
     $QUALIFICATION_F=$_POST['QUALIFICATION_F'];
     $OCCUPATION_F=$_POST['OCCUPATION_F'];
     $ANNUAL_INCOME_F=$_POST['ANNUAL_INCOME_F'];
     $MOTHER_NAME=$_POST['MOTHER_NAME'];
     $AGE_M=$_POST['AGE_M'];
     $QUALIFICATION_M=$_POST['QUALIFICATION_M'];
     $OCCUPATION_M=$_POST['OCCUPATION_M'];
     $ANNUAL_INCOME_M=$_POST['ANNUAL_INCOME_M'];
     $RESIDENTIAL_ADDRESS=$_POST['RESIDENTIAL_ADDRESS'];
     $qry = "INSERT INTO family_record (S_ID,FATHER_NAME,AGE_F,QUALIFICATION_F,OCCUPATION_F,ANNUAL_INCOME_F,MOTHER_NAME,AGE_M,QUALIFICATION_M,OCCUPATION_M,ANNUAL_INCOME_M,RESIDENTIAL_ADDRESS) VALUE('$S_ID','$FATHER_NAME','$AGE_F','$QUALIFICATION_F','$OCCUPATION_F','$ANNUAL_INCOME_F','$MOTHER_NAME','$AGE_M','$QUALIFICATION_M','$OCCUPATION_M','$ANNUAL_INCOME_M','$RESIDENTIAL_ADDRESS')";  
     
     if(mysqli_query($conn,$qry)) 
      header('Location:family_record.php');
     echo "Error: " . "<br>" . mysqli_error($conn);
   }   
?>

<html>
      <head>
        <style>.error { color: #FF0000; }</style>  <title>Welcome to LITMAP</title>
      </head>
       <body bgcolor="#B1B985">     
        <br><br>
             <center><h3>INSERT FAMILY RECORD<h3></center>
              <center>
             <form name="add" method ="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
               <input type="text" name="S_ID" placeholder="STUDENT ID"><br><br>
               <input type="text" name="FATHER_NAME" placeholder="FATHER'S NAME"><br><br>
               <input type="number" name="AGE_F" placeholder="FATHER'S AGE"><br><br>
               <input type="text" name="QUALIFICATION_F" placeholder="FATHER'S QUALIFICATION"><br><br>
               <input type="text" name="OCCUPATION_F" placeholder="FATHER'S OCCUPATION"><br><br>
               <input type="number" name="ANNUAL_INCOME_F" placeholder="FATHER'S ANNUAL INCOME"><br><br>
               <input type="text" name="MOTHER_NAME" placeholder="MOTHER'S NAME"><br><br>
               <input type="number" name="AGE_M" placeholder="MOTHER'S AGE"><br><br>
               <input type="text" name="QUALIFICATION_M" placeholder="MOTHER'S QUALIFICATION"><br><br>
               <input type="text" name="OCCUPATION_M" placeholder="MOTHER'S OCCUPATION"><br><br>
               <input type="number" name="ANNUAL_INCOME_M" placeholder="MOTHER'S ANNUAL INCOME"><br><br>
               <input type="text" name="RESIDENTIAL_ADDRESS" placeholder="RESIDENTIAL ADDRESS"><br><br><br>
               <input type="submit" value="Submit">
             </form>
               </center>
     </body>
</html>


