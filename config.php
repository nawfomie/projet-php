<?php
if(isset($_POST["submit"])){
    $emailvalue= $_POST["emailvalue"];
    $passvalue= $_POST["passvalue"];
    $emailerror ="";
    $passerror ="";
    if(empty($emailvalue)){
        $emailerror= "email must be filled";
    }else if(empty($passvalue)){
       $passerror =  "password must be filled";
    }else{
     header("home.php");
    }

}


?>