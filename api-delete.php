<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');
header('Acess-Control-Allow-Methods: DELETE');
header('Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,  Content-Type, Acess-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
$student_id = $data['sid'];
require "config.php";
$sql = "DELETE  FROM students WHERE id = {$student_id}";

if(mysqli_query($conn,$sql)){

    echo json_encode(array("message"=>"Student Record Delete", "status"=>true));


}else{
    echo json_encode(array("message"=>"Student Record not deleted", "status"=>false));
}

?>
