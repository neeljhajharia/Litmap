<?php  //view volunteer record
    ini_set('display_errors', '1');
    require_once 'connection.php';
    $var=0;
    if(isset($_GET['ROLL_NO'])&&!empty($_GET['ROLL_NO']))
    {
    	$ROLL_NO = $_GET['ROLL_NO'];
    }
    else
    {
    	$ROLL_NO = '0';
    }
    
    $result = $conn->query("SELECT * from volunteer_record where ROLL_NO = $ROLL_NO ") or die(mysqli_error($conn));

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {
          $var=1;
          $ROLL_N=$row['ROLL_NO'];
          $NAME=$row['NAME'];
          $YEAR=$row['YEAR'];
          $BRANCH=$row['BRANCH'];
          $MOBILE=$row['MOBILE'];
          $E_MAIL=$row['E_MAIL'];
          $ASSIGNED_STUDENT_1=$row['ASSIGNED_STUDENT_1'];
          $ASSIGNED_STUDENT_2=$row['ASSIGNED_STUDENT_2'];
          $ASSIGNED_STUDENT_3=$row['ASSIGNED_STUDENT_3'];
          $ASSIGNED_STUDENT_4=$row['ASSIGNED_STUDENT_4'];
          $ASSIGNED_STUDENT_5=$row['ASSIGNED_STUDENT_5'];
        }
    }
?>

<title>Welcome to LITMAP</title><br><br><br><br>
<?php if($var == 1) {?>
<center>
<div class="row">
    <div class="span10 offset1">
</div>
<div class="row">
    <div class="span10 offset1">
        <table class="table table-striped">
            <table class="table table-striped table-hover table-bordered">
                <tr class="info">
                    <td>ROLL NO</td>
                    <td> <?php echo $ROLL_N ?></td>
                </tr>
                <tr>
                    <td>NAME</td>
                    <td> <?php echo $NAME ?></td>
                </tr>
                    <td>YEAR</td>
                    <td> <?php echo $YEAR?></td>
                </tr>
                <tr>
                    <td>BRANCH</td>
                    <td> <?php echo $BRANCH ?></td>
                </tr>
                    <td>MOBILE</td>
                    <td> <?php echo $MOBILE ?></td>
                </tr>
                <tr>
                    <td>E-MAIL</td>
                    <td> <?php echo $E_MAIL ?></td>
                </tr>
                    <td>ASSIGNED STUDENT 1</td>
                    <td> <?php echo $ASSIGNED_STUDENT_1 ?></td>
                </tr>
                <tr>
                    <td>ASSIGNED STUDENT 2</td>
                    <td> <?php echo $ASSIGNED_STUDENT_2 ?></td>
                </tr>
                    <td>ASSIGNED STUDENT 3</td>
                    <td> <?php echo $ASSIGNED_STUDENT_3 ?></td>
                </tr>
                    <td>ASSIGNED STUDENT 4</td>
                    <td> <?php echo $ASSIGNED_STUDENT_4 ?></td>
                </tr>
                <tr>
                    <td>ASSIGNED STUDENT 5</td>
                    <td> <?php echo $ASSIGNED_STUDENT_5 ?></td>
                </tr>
                    
            </table>
        </table>
    </div>
</br>
</center>
<?php } ?>

<?php if($var==0) { ?>
<br><br><br><br><br><br><br><br><br>
<center>
<?php echo "Record for ".$ROLL_NO." doesn't exist" ?>
</center>
<?php } ?>

<br><br><center><a href= view_volunteer_record1.php>BACK TO SEARCH VOLUNTEER RECORD</a></center><br><br>
