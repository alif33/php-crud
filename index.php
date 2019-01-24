<?php include 'db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud system</title>
    <link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="sty.css">
</head>
<body>
    <h1>Our CRUD System</h1>



    <div class="tbl">
        <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Class</td>
            <td>Result</td>
            <td>Action</td>
            <td>Remove</td>
            


        </tr>
                      <!-- Read part Start -->
        <?php 
$db = new Database();
$query= "select *from stu_info";
$read = $db->select($query);
if($read){

    while($pri=$read->fetch_assoc()){
        ?>
                      <!--Read part end -->
        <tr>

            <td><?php echo $pri['id']; ?></td>
            <td><?php echo $pri['name']; ?></td>
            <td><?php echo $pri['class']; ?></td>
            <td><?php echo $pri['result']; ?></td>
            <td> <a href="update.php?id=<?php echo $pri['id']; ?>">Update</a></td>
            <td> <a href="delete.php?id=<?php echo $pri['id']; ?>">Delete</a></td>

        </tr>
 
        <!--Else part Start -->

          <?php 
         }
      }else {

      }
   ?>
        <!--Else part End -->   
        </table> 
        <div class="btn">
        <a href="insert.php">Create</a>
        </div>
       
   
    </div>
</body>
</html>
