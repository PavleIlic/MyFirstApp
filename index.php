<?php

// $user_ip = $_SERVER -- $HTTP_SERVER_VARS 'SERVER_ADDR'; 

function echo_ip(){
    $string = "Your IP address is: ".$user_ip;
    echo $string;
}

?>