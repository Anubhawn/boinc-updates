<?php


// Prevents direct access
if ($_SERVER['HTTP_REFERER'] != "http://$_SERVER[HTTP_HOST]/boincserver/submit_jobs.php"){
    header("Location: http://$_SERVER[HTTP_HOST]/boincserver/submit_jobs.php");
    exit('Cannot access page directly, token required');
}


include './token_data/validation.inc';
$user_token = $_POST['TOK'];
$orders = $_POST['DERS'];

if (valid_token($user_token) == false){
   exit("Invalid token");
}

// Skips empty orders
if (trim($orders) == ''){
   exit('Invalid, empty command');
}

echo "Command submitted to the server <br>";
// Prints the result to a file
$secfil = fopen("./token_data/issued.txt", "a");
fwrite($secfil, $orders . "\n");
fclose($secfil);


?>
