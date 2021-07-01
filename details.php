<?php 
$server_name="localhost";
$username="root";
$password="";
$database_name="databaseblog";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("connection failed:". mysqli_connect_error());

}


if(isset($_POST['save']))
{
    $name = $_POST['name']; 
    $number = $_POST['number'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $sql_query = "Insert into contact(name,number,email,subject)
    VALUES
    ('$name','$number','$email','$subject')";
      
    if(mysqli_query($conn,$sql_query))
     {
        $message = "Your contact information is saved successfully.";
        $type = "success";

     }
    else
     {
         echo "error:" .$sql."". mysqli_error($conn);
            }
            mysqli_close($conn);

}
?>
