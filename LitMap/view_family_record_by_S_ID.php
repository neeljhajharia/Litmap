<?php  //rank
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

    $result = $conn->query("SELECT * from family_record where S_ID = $S_id ") or die(mysqli_error($conn));
    
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
     $pointers = $conn->query("SELECT * from family_record where S_ID = $S_id1") or die(mysqli_error($conn));
    if($pointers->num_rows > 0)
    {
        while($row=$pointers->fetch_assoc())
        {
          $S_ID=$row['S_ID'];
          $FATHER_NAME=$row['FATHER_NAME'];
          $AGE_F=$row['AGE_F'];
          $QUALIFICATION_F=$row['QUALIFICATION_F'];
          $OCCUPATION_F=$row['OCCUPATION_F'];
          $ANNUAL_INCOME_F=$row['ANNUAL_INCOME_F'];
          $MOTHER_NAME=$row['MOTHER_NAME'];
          $AGE_M=$row['AGE_M'];
          $QUALIFICATION_M=$row['QUALIFICATION_M'];
          $OCCUPATION_M=$row['OCCUPATION_M'];
          $ANNUAL_INCOME_M=$row['ANNUAL_INCOME_M'];
          $RESIDENTIAL_ADDRESS=$row['RESIDENTIAL_ADDRESS'];
        }
    }
    $CLASS = $conn->query("SELECT student_record.CLASS from student_record,family_record where (family_record.S_ID=student_record.S_ID)");
    $j=0;
    while($row=$CLASS->fetch_assoc())
    {
        $j++;
        $CLASS1 = $row['CLASS'];
        break;
    }
    $NAME = $conn->query("SELECT student_record.NAME from student_record,family_record where (family_record.S_ID=student_record.S_ID)");    
    $i = 0;
    while($row = $NAME->fetch_assoc())
    {
        $i++;
        $NAME1 = $row['NAME'];
        break;
        
    }
  }
    
?>
<title>Welcome to LITMAP</title><br><br>
<?php if($var == 1) {?>
<center>
<div class="row">
    <div class="span10 offset1">
    <div class="span3"><span class='rank'> <?php echo $NAME1."<br>" ;?>  <br> </span></div><br>
</div>

<div class="row">
    <div class="span10 offset1">
        <table class="table table-striped">
            <table class="table table-striped table-hover table-bordered">
                <tr class="info">
                    <td>STUDENT ID</td>
                    <td> <?php echo $S_ID ?></td>
                </tr>
                <tr>
                    <td>CLASS</td>
                    <td> <?php echo $CLASS1 ?></td>
                </tr>
                <tr>
                    <td>FATHER'S NAME</td>
                    <td> <?php echo $FATHER_NAME ?></td>
                </tr>
                    <td>FATHER'S AGE </td>
                    <td> <?php echo $AGE_F?></td>
                </tr>
                <tr>
                    <td>FATHER'S QUALIFICATION</td>
                    <td> <?php echo $QUALIFICATION_F ?></td>
                </tr>
                    <td>FATHER'S OCCUPATION</td>
                    <td> <?php echo $OCCUPATION_F ?></td>
                </tr>
                <tr>
                    <td>FATHER'S ANNUAL INCOME</td>
                    <td> <?php echo $ANNUAL_INCOME_F ?></td>
                </tr>
                    <td>MOTHER'S NAME</td>
                    <td> <?php echo $MOTHER_NAME ?></td>
                </tr>
                <tr>
                    <td>MOTHER'S AGE</td>
                    <td> <?php echo $AGE_M ?></td>
                </tr>
                    <td>MOTHER'S QUALIFICATION</td>
                    <td> <?php echo $QUALIFICATION_M ?></td>
                </tr>
                    <td>MOTHER'S OCCUPATION</td>
                    <td> <?php echo $OCCUPATION_M ?></td>
                </tr>
                <tr>
                    <td>MOTHER'S ANNUAL INCOME</td>
                    <td> <?php echo $ANNUAL_INCOME_M ?></td>
                </tr>
                    <td>RESIDENTIAL ADDRESS</td>
                    <td> <?php echo $RESIDENTIAL_ADDRESS ?></td>
                </tr>
            </table>
        </table>
    </div>
</center>
</br>
<?php }?>

<?php if($var==0) { ?>
<br><br><br><br><br><br><br><br><br>
<center>
<?php echo "Record for ".$S_id." doesn't exist" ?>
</center>
<?php } ?>
<br><br><center><a href= view_family_record.php>BACK TO SEARCH FAMILY RECORD</a></center><br><br>

