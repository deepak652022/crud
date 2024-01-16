<?php include 'header.php';
include 'connection.php';
 ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            

            <select name="class">
           
                <option value="" selected disabled>Select Class</option>
                <?php
            $sql2 = "select * from student";
            $res2 = mysqli_query($con,$sql2);
            // if(mysqli_num_rows($res2)){}
            while($row2=mysqli_fetch_assoc($res2)){
                    // print_r($row2);
           
            ?>
                <option value="<?php echo $row2['stu_id']?>"><?php echo $row2['stu_class']?></option>
                <?php  }?>
            </select>

    
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
