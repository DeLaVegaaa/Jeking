<?php

    $Hostid = "redlock-db-dlv";
    $UName = "Creator";
    $Pwd = "ZeroAtmosphere8744736";
    $DBid = "redlock-db";

    $conn = new mysqli($Hostid, $UName, $Pwd, $DBid, 3306);

    if ($conn -> connect_error)
    {

        die("Connection failed: " . $conn -> connect_error);

    }

    $sql = "SELECT ID, Nama, Alamat, Jabatan FROM Users";
    $result = $conn -> query($sql);

    $amen = 0;
    
    if ($result -> num_rows > 0)
    {

        while($row = $result -> fetch_assoc())
            {
                $amen++;
            }
    }
    else
    {

    echo "0 results";

    }

    $conn -> close();

    echo $amen;
?>