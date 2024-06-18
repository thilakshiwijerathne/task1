<?php
    $con = mysqli_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error($con));
    }
    mysqli_select_db($con , "blissdatabase");
    $result = mysqli_query($con, "SELECT pword FROM registation
    WHERE email ='$_POST[email]'");
    while($row = mysqli_fetch_array($result))
    {
    $password= $row['pword'];
    }
    
    $pa= htmlspecialchars($_POST['password']);

    if($pa==$password){
        header("Location: cart.html");
    }
    else{  
        echo '<script>alert("Wrong password and username!");</script>';
    }

    mysqli_close($con);
    
?>