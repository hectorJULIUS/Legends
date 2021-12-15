<?php
    include ('./db_connect.php');

    if(isset($_POST['register']))
    {
    $fullname=$_POST["fullname"];
    $email=$_POST["emailadress"];
    $password=$_POST["password"];
    $phonenumber=$_POST["phonenumber"];
    $confirmpassword=$_POST["confirm_password"];

    // if ($password != $confirmpassword) {
        
    // }
    // else{
    // }
    
    
    $sql="INSERT INTO registrer (name, email, password,phonenumber, confirmpassword) 
    VALUES('$fullname', '$email','$password', '$phonenumber','$confirmpassword') "; 
    
    $query=mysqli_query($conn,$sql);
    
    if($query){
        echo '
        <script>
        window.alert("Saved successfully");
        window.location.href="index.php";
        </script>';
    }else{
       echo '<script>
       window.alert("Failed ! could not insert");
       window.location.href="index.php";
   </script>';
    } 
    }
    
    
?>