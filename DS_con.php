<?php
    require_once 'CT.php';

    $phone = $_POST['phone'];

        $del = " DELETE from studentInfo WHERE mobileno = '$phone' ";
                

            if ($conn->query($del))
            {
                echo "Your Record Delete Successfully";
                echo "<script> window.location.assign('retrive.php'); </script>";

                
            }
            else {
                {
                    echo "Error to deleting record "; 
                }
            }
            $conn->close(); 
?>