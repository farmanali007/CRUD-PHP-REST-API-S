<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require "config.php";
$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql) or die("queryy Failed");
if(mysqli_num_rows($result)>0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);

}else{
    echo json_encode(array("message"=>"No record found", "status"=>false));
}

?>
