<?php
/*
$db = mysqli_connect('localhost','root','','slumshop_db');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM tbl_admins WHERE admin_email = '$email' AND admin_pass = '$password' ";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Success");

        while ($row = $result->fetch_assoc()) {

            $admin['id'] = $row['admin_id'];
            $admin['name'] = $row['admin_name'];
            $admin['email'] = $row['admin_email'];
            $admin['role'] = $row['admin_role'];
            $admin['datereg'] = $row['admin_datereg'];
            
            }
            $response =array('status' => 'success','data' => $admin);
            sendJsonResponse($response);
            
            }
        
	}else{
		echo json_encode("Error");
	}*/


if (!isset($_POST)) 
{ echo "failed";
}
include_once("dbconnect.php");

//if(isset($_POST['email']) ||isset($_POST['password'])){
$email = $_POST['email'];
$password = $_POST['password'];

$sqllogin = "SELECT * FROM tbl_admins WHERE admin_email = '$email' AND admin_pass = '$password' ";  //php in database


$result = $conn->query($sqllogin);


 if ($result ->num_rows > 0) {
    
while ($row = $result->fetch_assoc()) {

$admin['id'] = $row['admin_id'];
$admin['name'] = $row['admin_name'];
$admin['email'] = $row['admin_email'];
$admin['role'] = $row['admin_role'];
$admin['datereg'] = $row['admin_datereg'];

}
$response =array('status' => 'success','data' => $admin);
sendJsonResponse($response);

}else{
    $response =array('status' => 'failed','data' => null);
    sendJsonResponse($response);
}

function sendJsonResponse($sentArray)
{
    header('Content-Type: application/json');
    echo json_encode($sentArray);
}

//}
?>