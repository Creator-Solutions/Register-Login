<?php 

    function get_connection(){

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "shopify";

        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn){
            die("Could not connect to server");
        }

        return $conn;

    }

