<?php  //view family
    ini_set('display_errors', '1');
    require_once 'connection.php';
    $var=0;
    if(isset($_GET['S_id'])&&!empty($_GET['S_id']))
    {
    	$S_id = $_GET['S_id'];
    }
    else
    {
    	$S_id = '0';
    }
 
    $result = $conn->query("SELECT * from student_record where S_ID = $S_id ") or die(mysqli_error($conn));
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $S_id1 = $row['S_ID'];
            $var=1;
        }
    }
  if($var==1)
  {
    $pointers = $conn->query("SELECT * from student_record where S_ID = $S_id1") or die(mysqli_error($conn));
    if($pointers->num_rows > 0)
    {
        while($row=$pointers->fetch_assoc())
        {
          $S_ID=$row['S_ID'];
          $NAME=$row['NAME'];
          $AGE=$row['AGE'];
          $CLASS=$row['CLASS'];
          $BLOOD_GROUP=$row['BLOOD_GROUP'];
          $GENDER=$row['GENDER'];
          $VOLUNTEER_1=$row['VOLUNTEER_1'];
          $VOLUNTEER_2=$row['VOLUNTEER_2'];
          $SCHOOL_NAME=$row['SCHOOL_NAME'];
          $SCHOOL_TYPE=$row['SCHOOL_TYPE'];
          $FEE_PAYMENT_MODE=$row['FEE_PAYMENT_MODE'];
        }
    }
    $CLA = $conn->query("SELECT student_record.CLASS from student_record,family_record where (family_record.S_ID=student_record.S_ID)");
    $j=0;
    while($row=$CLA->fetch_assoc())
    {
        $j++;
        $CLASS1 = $row['CLASS'];
        break;
    }
    $NAM = $conn->query("SELECT student_record.NAME from student_record,family_record where (family_record.S_ID=student_record.S_ID)");    
    $i = 0;
    while($row = $NAM->fetch_assoc())
    {
        $i++;
        $NAME1 = $row['NAME'];
        break;
        
    }
  }
    
?>
<title>Welcome to LITMAP</title><br>
<?php if($var == 1) {?>
<center>
<div class="row">
    <div class="span10 offset1">
    <div class="span3"><span class='rank'> <?php echo "<br> ".$NAME1 ;?>  <br> </span></div><br>
</div>
<div class="row">
    <div class="span10 offset1">
        <table class="table table-striped">
            <table class="table table-striped table-hover table-bordered">
                <tr class="info">
                    <td>STUDENT ID</td>
                    <td> <?php echo $S_ID ?></td>
                </tr>
             <!--   <tr>
                    <td>NAME</td>
                    <td> <?php echo $NAME ?></td>
                </tr>
            -->
                    <td>AGE</td>
                    <td> <?php echo $AGE?></td>
                </tr>
                <tr>
                    <td>CLASS</td>
                    <td> <?php echo $CLASS ?></td>
                </tr>
                    <td>BLOOD GROUP</td>
                    <td> <?php echo $BLOOD_GROUP ?></td>
                </tr>
                <tr>
                    <td>GENDER</td>
                    <td> <?php echo $GENDER ?></td>
                </tr>
                    <td>ASSIGNED VOLUNTEER 1</td>
                    <td> <?php echo $VOLUNTEER_1 ?></td>
                </tr>
                <tr>
                    <td>ASSIGNED VOLUNTEER 2</td>
                    <td> <?php echo $VOLUNTEER_2 ?></td>
                </tr>
                    <td>SCHOOL NAME</td>
                    <td> <?php echo $SCHOOL_NAME ?></td>
                </tr>
                    <td>SCHOOL TYPE</td>
                    <td> <?php echo $SCHOOL_TYPE ?></td>
                </tr>
                <tr>
                    <td>FEE PAYMENT MODE</td>
                    <td> <?php echo $FEE_PAYMENT_MODE ?></td>
                </tr>
                    
            </table>
        </table>
    </div>
<center>
</br>
<?php }?>

<?php if($var==0) { ?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<?php echo "Record for ".$S_id." doesn't exist" ?>
</center>
<?php } ?>
<br><br><center><a href= view_student_record.php>BACK TO SEARCH STUDENT RECORD</a></center><br><br>

