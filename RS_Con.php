<?php
  
    $name = $_POST['Name'];
    $father  = $_POST['father'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
  

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "web_technology";
   
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
   
    
    if (mysqli_connect_error())
    {
  		echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
    else
    {   

            $sql = "INSERT INTO StudentInfo (stdname, fathername, email, mobileno)
            VALUES ('$name','$father', '$email','$phone')";

            if ($conn->query($sql))
            {
                echo "New record is inserted successfully";
                echo "<script> window.location.assign('retrive.php'); </script>";
                
            }
            else {
                {
                    echo "Error Inserting record Witch".$conn->error; 
                }
            }
            $conn->close();
    } 

?>