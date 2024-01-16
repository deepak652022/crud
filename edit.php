<?php include 'header.php';

include 'connection.php';
$stu_id=$_GET['ssid2'];
$sql10= "select * from student where stu_id={$stu_id}";
$res10=mysqli_query($con,$sql10);

?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="" method="post">

    <?php 
        while($row10=mysqli_fetch_assoc($res10))
        {
            
        ?>
      <div class="form-group">
       
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row10['stu_name'] ?>">
          <input type="text" name="sname" value="<?php echo $row10['stu_name'] ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row10['stu_add'] ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass">
              <option value="" selected disabled>Select Class</option>
              <option value="1">BCA</option>
              <option value="2">BSC</option>
              <option value="3">B.TECH</option>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row10['stu_phone'] ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>


    <?php } ?>
    </form>
</div>
</div>
</body>
</html>
