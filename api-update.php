<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,  Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

require "config.php";


$data = json_decode(file_get_contents("php://input"), true);

$student_id = $data['sid'];
$student_name = $data['sname'];
$student_age = $data['sage'];
$student_city = $data['scity'];


$sql = "UPDATE students SET student_name = '{$student_name}', age = '{$student_age}', city = '{$student_city}' WHERE id = {$student_id}";



if(mysqli_query($conn,$sql)){

    echo json_encode(array("message"=>"Student record updated", "status"=>true));

}else{
    echo json_encode(array("message"=>"student record not updated", "status"=>false));
}

?>
