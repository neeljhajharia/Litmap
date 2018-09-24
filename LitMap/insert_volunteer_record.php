<?php  //original 
    ini_set('display_errors', '1');
    require_once 'connection.php';

    if(!empty($_POST['ROLL_NO']) && !empty($_POST['NAME']) && !empty($_POST['YEAR']) && !empty($_POST['BRANCH']) && !empty ($_POST['MOBILE']) && !empty($_POST['E_MAIL']) && !empty($_POST['ASSIGNED_STUDENT_1']) && !empty($_POST['ASSIGNED_STUDENT_2']) && !empty($_POST['ASSIGNED_STUDENT_3']) && !empty ($_POST['ASSIGNED_STUDENT_4']) && !empty($_POST['ASSIGNED_STUDENT_5']))
    {
     $ROLL_NO=$_POST['ROLL_NO'];
     $NAME=$_POST['NAME'];
     $YEAR=$_POST['YEAR'];
     $BRANCH=$_POST['BRANCH'];
     $MOBILE=$_POST['MOBILE'];
     $E_MAIL=$_POST['E_MAIL'];
     $ASSIGNED_STUDENT_1=$_POST['ASSIGNED_STUDENT_1'];
     $ASSIGNED_STUDENT_2=$_POST['ASSIGNED_STUDENT_2'];
     $ASSIGNED_STUDENT_3=$_POST['ASSIGNED_STUDENT_3'];
     $ASSIGNED_STUDENT_4=$_POST['ASSIGNED_STUDENT_4'];
     $ASSIGNED_STUDENT_5=$_POST['ASSIGNED_STUDENT_5'];
     
     $qry = "INSERT INTO volunteer_record (ROLL_NO,NAME,YEAR,BRANCH,MOBILE,E_MAIL,ASSIGNED_STUDENT_1,ASSIGNED_STUDENT_2,ASSIGNED_STUDENT_3,ASSIGNED_STUDENT_4,ASSIGNED_STUDENT_5) VALUE('$ROLL_NO','$NAME','$YEAR','$BRANCH','$MOBILE','$E_MAIL','$ASSIGNED_STUDENT_1','$ASSIGNED_STUDENT_2','$ASSIGNED_STUDENT_3','$ASSIGNED_STUDENT_4','$ASSIGNED_STUDENT_5')";  
     
     if(mysqli_query($conn,$qry)) 
      header('Location:volunteer_record.php');
     echo "Error: " . "<br>" . mysqli_error($conn);
   }   
?>

<html>
      <head>
        <style>.error { color: #FF0000; }</style>
         <title>Welcome to LITMAP</title>
      </head>
      <body bgcolor="#B1B985">
        <br><br>
        <center>
            <h3>VOLUNTEER RECORD SECTION<h3><br>
             <form NAME="add" method ="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
               <input type="text" NAME="ROLL_NO" placeholder="COLLEGE ROLL NO"><br><br>
               <input type="text" NAME="NAME" placeholder="NAME"><br><br>
               <input type="text" NAME="YEAR" placeholder="YEAR"><br><br>
               <input type="text" NAME="BRANCH" placeholder="BRANCH"><br><br>
               <input type="number" NAME="MOBILE" placeholder="MOBILE"><br><br>
               <input type="email" NAME="E_MAIL" placeholder="E-MAIL"><br><br>
               <input type="text" NAME="ASSIGNED_STUDENT_1" placeholder="ASSIGNED STUDENT 1"><br><br>
               <input type="text" NAME="ASSIGNED_STUDENT_2" placeholder="ASSIGNED STUDENT 2"><br><br>
               <input type="text" NAME="ASSIGNED_STUDENT_3" placeholder="ASSIGNED STUDENT 3"><br><br>
               <input type="text" NAME="ASSIGNED_STUDENT_4" placeholder="ASSIGNED STUDENT 4"><br><br>
               <input type="text" NAME="ASSIGNED_STUDENT_5" placeholder="ASSIGNED STUDENT 5"><br><br><br>
               
               <input type="submit" value="Submit">
             </form>
        </center>       
     </body>
</html>
















