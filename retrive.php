<?php
    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "web_technology";
        
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

    $ret = mysqli_query($conn,"SELECT * FROM studentInfo");
    echo "<table border='1'>";
        echo "<tr>";
            echo "<th> stdID </th>";
            echo "<th> stdname </th>";
            echo "<th> fathername </th>";
            echo "<th> email </th>";
            echo "<th> mobileno </th>";
           

            while($row=mysqli_fetch_array($ret))
            {
                echo "<tr>";
                // echo "<td height: auto>";
                    echo "<td>" .$row ['stdID']. "</td>";
                    echo "<td>" .$row ['stdname']. "</td>";
                    echo "<td>" .$row ['fathername']. "</td>";
                    echo "<td>" .$row ['email']. "</td>";
                    echo "<td>" .$row ['mobileno']. "</td>";
                   
                // echo "</td>";
                echo "</tr>";
            }
        echo "</tr>";
    echo "</table>";
    $conn->close();
?>