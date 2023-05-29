<?php 
    function Connect($sql)
    {
        $id = "";
        $password = "";
        $webhost = false; // false para Localhost, true para WebHosting
        if($webhost)
        {
            $id = "id20602905_";
            $password = 'y?$Xk@&4i?8*{oP_';
        }

        $database = $id."mydb";
        $user = $id."root";
        $server = "localhost";
        
        $conn = new mysqli($server, $user , $password, $database);
        
        if($conn->connect_errno)
        {
            echo "Error: " . $conn->connect_errno;
            exit();
        }

        return $conn->query($sql);
    }
?>