<?php include("header.php");?>
<?php include("nav.php");?>
<?php require_once 'db.php';?>
<?php
$sql="SELECT * from tbl_users";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
?>
<div class="container">
<h1>User List</h1>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <?php
        while(mysqli_fetch_assoc($result))
        {
            echo"<tr>";
            echo"<td>" .$row['first_name']."</td>";
            echo"<td>" .$row['last_name']."</td>";
            echo"<td>" .$row['address']."</td>";
            echo"<td>" .$row['contact_no']."</td>";
            echo"<td><a href='edit.php? id=".$row['id']."' class='btn btn-info'>Edit</td>";
            echo"<td> <input type='submit' name='delete' value='delete' class='btn btn-danger'> </td>";
            echo"</tr>";
        }




    ?>
   
</table>
<?php 
}
else{
    echo"<h2>Record not found</h2>";
}


?>

</div>






<?php include("footer.php");?>