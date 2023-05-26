<?php 
    function Connect($sql)
    {
        $id = "";
        $password = "";
        $webhost = false;
        if($webhost)
        {
            $id = "id20602905_";
            $password = 'y?$Xk@&4i?8*{oP_';
        }

        $database = $id."mydb";
        $user = $id."root";
        $server = "localhost";
        
        $conn = new mysqli($server, $user , $password, $database);
        
        if($conn->connect_error)
        {
            die("Error: " . $conn->connect_error);
        }

        return $conn->query($sql);
    }
?>