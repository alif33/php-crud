
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
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $class= $_POST['class'];
    $result= $_POST['result'];
    if($name == '' || $class == '' || $result == ''){
        $error="field must not be empty";
    }else{
        $query="INSERT INTO stu_info (name,class,result) VALUES(' $name','$class','$result')";
        $insert= $db->insert($query);
        $succ="inserted successfully";
       
    }
   

}
?>

        <form action="" method="post">
            <table> 
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" placeholder="Name..."></td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td><input type="text" name="class" placeholder="Class..."></td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td><input type="text" name="result" placeholder="Result..."></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" ></td>
                    </tr>
            
        
            </table>
        </form>
 
 
        <div class="btn">
            <a href="index.php">Back</a>
        </div>

<?php

if(isset($succ)){
    echo $succ;
}else{

}?>

</body>
</html>

