<?php
include 'header.php';
include 'connection.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
   
    $sql1 = "select * from student";
    $result = mysqli_query($con,$sql1);
   
    // print_r($result);  returns   mysqli_result Object ( [current_field] => 0 [field_count] => 5 [lengths] => [num_rows] => 2 [type] => 0 ) 


    // $rowString = implode(", ", $row);

    // echo $result;
    // echo gettype($result);






    // if(mysqli_num_rows($result)>0){
    //     while($row = mysqli_fetch_assoc($result))
    //     {
    //         echo $row;
    //         print_r($row);
    //     }
    // }



    if(mysqli_num_rows($result)>0){
        
   


    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

        <?php 
        
        while($row = mysqli_fetch_assoc($result))
        {
            
        ?>
            <tr>
                <td><?php echo $row['stu_id'];?></td>
                <td><?php echo $row['stu_name'];?></td>
                <td><?php echo $row['stu_add'];?></td>
                <td><?php echo $row['stu_class'];?></td>
                <td><?php echo $row['stu_phone'];?></td>
                <td>
                    <a href='edit.php?ssid2=<?php echo $row['stu_id'];?>'>Edit</a>
                    <a href='delete-inline.php?ssid=<?php echo $row['stu_id'];?>'>Delete</a>
                </td>
            </tr>
            <?php  
           
        }?>
        </tbody>
    </table>

    <?php  }?>
</div>
</div>
</body>
</html>
