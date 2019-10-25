
<?php

require_once 'CT.php';

if($_POST) 
{
    $mobile = $_POST['phone'];
    $username = $_POST['user'];
    $father = $_POST['father'];
    $email = $_POST['email'];

    $q = " UPDATE studentInfo SET stdname='$username', fathername='$father'  , email='$email'
    where mobileno= $mobile  ";

    if ( $conn->query($q) )
    {
        echo "Record will update";
    }
    else
    {
        echo "Updating Error !!! " .$conn->error; 
    }


}



