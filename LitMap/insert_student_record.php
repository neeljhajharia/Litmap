<?php  //original 
    ini_set('display_errors', '1');
    require_once 'connection.php';

    if(!empty($_POST['S_ID']) && !empty($_POST['NAME']) && !empty($_POST['AGE']) && !empty($_POST['CLASS']) && !empty ($_POST['BLOOD_GROUP']) && !empty($_POST['GENDER']) && !empty($_POST['VOLUNTEER_1']) && !empty($_POST['VOLUNTEER_2']) && !empty($_POST['SCHOOL_NAME']) && !empty ($_POST['SCHOOL_TYPE']) && !empty($_POST['FEE_PAYMENT_MODE']))
    {
     $S_ID=$_POST['S_ID'];
     $NAME=$_POST['NAME'];
     $AGE=$_POST['AGE'];
     $CLASS=$_POST['CLASS'];
     $BLOOD_GROUP=$_POST['BLOOD_GROUP'];
     $GENDER=$_POST['GENDER'];
     $VOLUNTEER_1=$_POST['VOLUNTEER_1'];
     $VOLUNTEER_2=$_POST['VOLUNTEER_2'];
     $SCHOOL_NAME=$_POST['SCHOOL_NAME'];
     $SCHOOL_TYPE=$_POST['SCHOOL_TYPE'];
     $FEE_PAYMENT_MODE=$_POST['FEE_PAYMENT_MODE'];
     
     $qry = "INSERT INTO student_record (S_ID,NAME,AGE,CLASS,BLOOD_GROUP,GENDER,VOLUNTEER_1,VOLUNTEER_2,SCHOOL_NAME,SCHOOL_TYPE,FEE_PAYMENT_MODE) VALUE('$S_ID','$NAME','$AGE','$CLASS','$BLOOD_GROUP','$GENDER','$VOLUNTEER_1','$VOLUNTEER_2','$SCHOOL_NAME','$SCHOOL_TYPE','$FEE_PAYMENT_MODE')";  
     
     if(mysqli_query($conn,$qry)) 
      header('Location:student_record.php');
     echo "Error: " . "<br>" . mysqli_error($conn);
   }   
?>

<html>
      <head>
        <style>.error { color: #FF0000; }</style>
<title>Welcome to LITMAP</title>
      </head>
          <body bgcolor="#B1B985">
            <br><br><br>
            <center>
            <h3>INSERT STUDENT RECORD<h3>
            </center>
            <center>
             <form name="add" method ="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
               <input type="text" name="S_ID" placeholder="STUDENT ID"><br><br>
               <input type="text" name="NAME" placeholder="NAME"><br><br>
               <input type="number" name="AGE" placeholder="AGE"><br><br>
               <input type="text" name="CLASS" placeholder="CLASS"><br><br>
               <input type="text" name="BLOOD_GROUP" placeholder="BLOOD GROUP"><br><br>
               <input type="text" name="GENDER" placeholder="GENDER"><br><br>
               <input type="text" name="VOLUNTEER_1" placeholder="ASSIGNED VOLUNTEER 1"><br><br>
               <input type="text" name="VOLUNTEER_2" placeholder="ASSIGNED VOLUNTEER 2"><br><br>
               <input type="text" name="SCHOOL_NAME" placeholder="SCHOOL NAME"><br><br>
               <input type="text" name="SCHOOL_TYPE" placeholder="SCHOOL TYPE"><br><br>
               <input type="text" name="FEE_PAYMENT_MODE" placeholder="FEE PAYMENT MODE"><br><br><br>
               
               <input type="submit" value="Submit">
             </form>
               </center>
     </body>
</html>
















