
<?php include 'db.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud system</title> 
    <link rel="stylesheet" href="sty.css">
</head>
<body>
    <h1>Insert Data</h1>

            <?php 
                    $id = $_GET['id'];
                    $query= "select *from stu_info where id='$id'";
                    $getdata= $db->select($query);
                    if($getdata){
                        $pri=$getdata->fetch_assoc();
                    }
                    ?>

        <?php 
            if(isset($_POST['submit'])){
                $name= $_POST['name'];
                $class= $_POST['class'];
                $result= $_POST['result'];
                if($name == '' || $class == '' || $result == ''){
                    $error="field must not be empty";
                }else{
                    $query="UPDATE stu_info
                    SET
                    name = '$name',
                    class = '$class',
                    result = '$result'
                    WHERE id= $id ";
                    $update = $db->update($query);
                    $succ="Updated successfully";
                    header('location:index.php');               
                }
            }
        ?>

        <form action="" method="post">
            <table> 
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="<?php echo $pri['name'];?>"></td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td><input type="text" name="class"value="<?php echo $pri['class'];?>"></td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td><input type="text" name="result" value="<?php echo $pri['result'];?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" ></td>
                    </tr>
            
        
            </table>
        </form>

     

<?php

if(isset($succ)){
    echo $succ;
}else{
   
}?>

</body>
</html>

