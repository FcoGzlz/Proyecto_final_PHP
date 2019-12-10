<?php
    function conectar() {
        $con = mysqli_connect("localhost", "root","" , "final_project");

        if (!$con) {
            die("fallo");
        }else{
        }
        return $con;
    }
?>