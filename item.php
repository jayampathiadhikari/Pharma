
<?php 


$servername = "remotemysql.com";
$username = "NUlBMh0F3u";
$password = "9ImvZnHsgZ";
$dbname = "NUlBMh0F3u";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$brand = $_POST['brand'];
$amount = $_POST['amount'];
$bprice = $_POST['bprice'];
$sprice = $_POST['sprice'];


$sql="INSERT INTO drugs (name,brand,buying_price,selling_price) VALUES ($name,$brand,$bprice,$sprice)";
if ($conn->query($sql) === TRUE) {
  echo 'Connected successfully';
    $details[]=array(
        'status'=>'success'
    );
    
} 
else {
  echo 'Connected unsuccessfully'. $conn->error;
    $details[]=array(
        'status'=>"Error updating record: " . $conn->error
);

};

echo (json_encode($details));
?>

