<?php  //original 
    ini_set('display_errors', '1');
    require_once 'connection.php';

    if(!empty($_POST['S_ID']) && !empty($_POST['YEAR']) && !empty($_POST['TYPE']) && !empty($_POST['PHYSICS']) && !empty ($_POST['CHEMISTRY']) && !empty($_POST['MATHEMATICS']) && !empty($_POST['ENGLISH_LITERATURE']) && !empty($_POST['HINDI']) && !empty($_POST['GEOGRAPHY']) && !empty ($_POST['HISTORY_CIVICS']) && !empty($_POST['ENVIRONMENTAL_SCIENCE']) && !empty($_POST['COMPUTER_APPLICATIONS']) && !empty($_POST['ENGLISH_LANGUAGE']) && !empty($_POST['BIOLOGY'])  )
    {
     $S_ID=$_POST['S_ID'];
     $YEAR=$_POST['YEAR'];
     $TYPE=$_POST['TYPE'];
     $PHYSICS=$_POST['PHYSICS'];
     $CHEMISTRY=$_POST['CHEMISTRY'];
     $MATHEMATICS=$_POST['MATHEMATICS'];
     $ENGLISH_LITERATURE=$_POST['ENGLISH_LITERATURE'];
     $HINDI=$_POST['HINDI'];
     $GEOGRAPHY=$_POST['GEOGRAPHY'];
     $HISTORY_CIVICS=$_POST['HISTORY_CIVICS'];
     $ENVIRONMENTAL_SCIENCE=$_POST['ENVIRONMENTAL_SCIENCE'];
     $COMPUTER_APPLICATIONS=$_POST['COMPUTER_APPLICATIONS'];
     $ENGLISH_LANGUAGE=$_POST['ENGLISH_LANGUAGE'];
     $BIOLOGY=$_POST['BIOLOGY'];
     $TOTAL = $PHYSICS + $CHEMISTRY + $MATHEMATICS + $ENGLISH_LITERATURE + $HINDI + $GEOGRAPHY + $HISTORY_CIVICS + $ENVIRONMENTAL_SCIENCE + $COMPUTER_APPLICATIONS + $ENGLISH_LANGUAGE + $BIOLOGY ;
     $PERCENTAGE = $TOTAL/11;

     $qry = "INSERT INTO class_9 (S_ID,YEAR,TYPE,PHYSICS,CHEMISTRY,MATHEMATICS,ENGLISH_LITERATURE,HINDI,GEOGRAPHY,HISTORY_CIVICS,ENVIRONMENTAL_SCIENCE,COMPUTER_APPLICATIONS,ENGLISH_LANGUAGE,BIOLOGY,TOTAL,PERCENTAGE) VALUE('$S_ID','$YEAR','$TYPE','$PHYSICS','$CHEMISTRY','$MATHEMATICS','$ENGLISH_LITERATURE','$HINDI','$GEOGRAPHY','$HISTORY_CIVICS','$ENVIRONMENTAL_SCIENCE','$COMPUTER_APPLICATIONS','$ENGLISH_LANGUAGE','$BIOLOGY','$TOTAL','$PERCENTAGE')";  
     
   

     if(mysqli_query($conn,$qry)) 
      header('Location:class_9.php');
     echo "Error: " . "<br>" . mysqli_error($conn);
   }   
?>

<html>
      <head>
        <style>.error { color: #FF0000; }</style>
        <title>Welcome to LITMAP</title>
      </head>
      <body bgcolor="#B1B985">
        <br>
        <center><h3>STUDENT RESULT SECTION<h3></center>
        <center>
             <form YEAR="add" method ="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
               <input type="text" name="S_ID" placeholder="STUDENT ID"><br><br>
               <input type="number" name="YEAR" placeholder="YEAR"><br><br>
               <input type="text" name="TYPE" placeholder="EXAMINATION TYPE"><br><br>
               <input type="number" name="PHYSICS" placeholder="PHYSICS"><br><br>
               <input type="number" name="CHEMISTRY" placeholder="CHEMISTRY"><br><br>
               <input type="number" name="MATHEMATICS" placeholder="MATHEMATICS"><br><br>
               <input type="number" name="ENGLISH_LITERATURE" placeholder="ENGLISH LITERATURE"><br><br>
               <input type="number" name="HINDI" placeholder="HINDI"><br><br>
               <input type="number" name="GEOGRAPHY" placeholder="GEOGRAPHY"><br><br>
               <input type="number" name="HISTORY_CIVICS" placeholder="HISTORY & CIVICS"><br><br>
               <input type="number" name="ENVIRONMENTAL_SCIENCE" placeholder="ENVIRONMENTAL SCIENCE"><br><br>
               <input type="number" name="COMPUTER_APPLICATIONS" placeholder="COMPUTER APPLICATIONS"><br><br>
               <input type="number" name="ENGLISH_LANGUAGE" placeholder="ENGLISH LANGUAGE"><br><br>
               <input type="number" name="BIOLOGY" placeholder="BIOLOGY"><br><br><br>
               
               <input type="submit" value="Submit">
             </form>
        </center>       
     </body>
</html>
