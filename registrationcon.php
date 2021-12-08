<?php
    include ('./db_connect.php');

    if(isset($_POST['submit']))
    {
    $fullname=$_POST["Fullname"];
    $email=$_POST["emailadress"];
    $password=$_POST["password"];
    $confermpassword=$_POST["confirm_password"];
    $phonenumber=$_POST["phonenumber"];
    
    $sql="INSERT INTO registrer (name, email, password,confirmpassword,phonenumber) VALUES('$name', '$email','$password','confermpassword', '$phonenumber') "; 
    
    $query=mysqli_query($conn,$sql);
    
    if($query){
        echo 
        '
        <script>
        window.alert("Saved successfully");
        window.location.href="index.php";
        </script>
        ';
    }else{
       echo '<script>
       window.alert("Failed ! could not insert");
       window.location.href="index.php";
   </script>';
    } 
    }
    
    
?>