<?php
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

    $result = $conn->query("SELECT * from class_9 where S_ID = $S_id ") or die(mysqli_error($conn));
    
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
    $pointers = $conn->query("SELECT * from class_9 where S_ID = $S_id1") or die(mysqli_error($conn));
    if($pointers->num_rows > 0)
    {
        while($row=$pointers->fetch_assoc())
        {
            $YEAR = $row["YEAR"];
            $TYPE = $row["TYPE"];
            $PHYSICS = $row["PHYSICS"];
            $CHEMISTRY = $row["CHEMISTRY"];
            $MATHEMATICS = $row["MATHEMATICS"];
            $ENGLISH_LITERATURE = $row["ENGLISH_LITERATURE"];
            $HINDI = $row["HINDI"];
            $GEOGRAPHY = $row["GEOGRAPHY"];
            $HISTORY_CIVICS = $row["HISTORY_CIVICS"];
            $ENVIRONMENTAL_SCIENCE = $row["ENVIRONMENTAL_SCIENCE"];
            $COMPUTER_APPLICATIONS = $row["COMPUTER_APPLICATIONS"];
            $ENGLISH_LANGUAGE = $row["ENGLISH_LANGUAGE"];            
            $BIOLOGY = $row["BIOLOGY"];
            $TOTAL = $row["TOTAL"];
            $PERCENTAGE = $row["PERCENTAGE"];
        }
    }
    $CLASS = $conn->query("SELECT student_record.CLASS from student_record,class_9 where (class_9.S_ID=student_record.S_ID and student_record.S_ID=$S_id1)");
    $j=0;
    while($row=$CLASS->fetch_assoc())
    {
        $j++;
        $CLASS1 = $row['CLASS'];
        break;
    }
     
    $nr = $conn->query("SELECT student_record.S_ID from class_9,student_record WHERE (class_9.S_ID=student_record.S_ID AND student_record.CLASS=$CLASS1) order by PERCENTAGE DESC; ");
    $classRank = 0;
    while($row = $nr->fetch_assoc())
    {
        $classRank++;
        if($S_id1 == $row['S_ID'] )
            break;
    }
    $nr1 = $conn->query("SELECT student_record.NAME from class_9,student_record WHERE (class_9.S_ID=student_record.S_ID AND student_record.CLASS=$CLASS1) order by PERCENTAGE DESC; ");
    $i = 0;
    while($row = $nr1->fetch_assoc())
    {
        $i++;
        if($i == $classRank )
        {
            $NAME1=$row['NAME'];
        }
    }
  }
    
?>
<title>Welcome to LITMAP</title><br><br><br>
<?php if($var == 1) {?>
<center>
<div class="row">
    <div class="span10 offset1">
   <!-- <div class="span3"><span class='rank'> <?php echo "Class Rank ".$classRank ;?> </span></div> -->
</div>
<div class="row">
    <div class="span10 offset1">
        <table class="table table-striped">
            <table class="table table-striped table-hover table-bordered">
                <tr class="info">
                    <td> NAME</td>
                    <td> <?php echo $NAME1 ?></td>
                </tr>
                <tr>
                    <td>ROLL NUMBER</td>
                    <td> <?php echo $S_id1 ?></td>
                </tr>
                <tr>
                    <td>CLASS RANK</td>
                    <td> <?php echo $classRank ?></td>
                </tr>

                <?php if($YEAR != -1) {?>
                <tr class="info">
                    <td>YEAR</td>
                    <td> <?php echo $YEAR ?></td>
                </tr>
                <?php } ?>

                <?php if($PHYSICS != -1) {?>
                <tr class="info">
                    <td>PHYSICS</td>
                    <td> <?php echo $PHYSICS ?></td>
                </tr>
                <?php } ?>

                <?php if($CHEMISTRY != -1) {?>
                <tr class="info">
                    <td>CHEMISTRY</td>
                    <td> <?php echo $CHEMISTRY?></td>
                </tr>
                <?php } ?>

                <?php if($MATHEMATICS != -1) {?>
                <tr class="info">
                    <td>MATHEMATICS</td>
                    <td> <?php echo $MATHEMATICS ?></td>
                </tr>
                <?php } ?>

                <?php if($ENGLISH_LITERATURE != -1) {?>
                <tr class="info">
                    <td>ENGLISH LITERATURE</td>
                    <td> <?php echo $ENGLISH_LITERATURE ?></td>
                </tr>
                <?php } ?>

                <?php if($HINDI != -1) {?>
                <tr class="info">
                    <td>HINDI</td>
                    <td> <?php echo $HINDI ?></td>
                </tr>
                <?php } ?>

                <?php if($GEOGRAPHY != -1) {?>
                <tr class="info">
                    <td>GEOGRAPHY</td>
                    <td> <?php echo $GEOGRAPHY ?></td>
                </tr>
                <?php } ?>

                <?php if($HISTORY_CIVICS != -1) {?>
                <tr class="info">
                    <td>HISTORY & CIVICS</td>
                    <td> <?php echo $HISTORY_CIVICS ?></td>
                </tr>
                <?php } ?>

                <?php if($ENVIRONMENTAL_SCIENCE != -1) {?>
                <tr class="info">
                    <td>ENVIRONMENTAL SCIENCE</td>
                    <td> <?php echo $ENVIRONMENTAL_SCIENCE ?></td>
                </tr>
                <?php } ?>

                <?php if($COMPUTER_APPLICATIONS != -1) {?>
                <tr class="info">
                    <td>COMPUTER APPLICATIONS</td>
                    <td> <?php echo $COMPUTER_APPLICATIONS?></td>
                </tr>
                <?php } ?>

                <?php if($ENGLISH_LANGUAGE != -1) {?>
                <tr class="info">
                    <td>ENGLISH LANGUAGE</td>
                    <td> <?php echo $ENGLISH_LANGUAGE?></td>
                </tr>
                <?php } ?>

                <?php if($BIOLOGY != -1) {?>
                <tr class="info">
                    <td>BIOLOGY</td>
                    <td> <?php echo $BIOLOGY ?></td>
                </tr>
                <?php } ?>
  
              
                <?php if($TOTAL != -1) {?>
                <tr class="info">
                    <td>TOTAL</td>
                    <td> <?php echo $TOTAL?></td>
                </tr>
                <?php } ?>

                <?php if($PERCENTAGE != -1) {?>
                <tr class="info">
                    <td>PERCENTAGE</td>
                    <td> <?php echo $PERCENTAGE?></td>
                </tr>
                <?php } ?>

            </table>
        </table>
    </div>
</br>
</center><br>
<?php }?>

<?php if($var==0) { ?>
<br><br><br><br><br><br><br><br><br><br>
<center>
<?php echo "Record for ".$S_id." doesn't exist" ?>
</center>
<?php } ?>
<br><br>
         <center><a href = "view_performance_record1.php">BACK TO SEARCH STUDENT RESULT</center>
