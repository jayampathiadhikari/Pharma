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
    
    // $id = $_POST['id'];
    // $name = $_POST['name'];
    // $brand = $_POST['brand'];
    // $bprice = $_POST['bprice'];
    // $sprice = $_POST['sprice'];

    $ID = 70;
    $name = 'jkje';
    $brand = 'fuk';
    $buying_price = 10;
    $selling_price = 20;

    $sql="INSERT INTO `products`(`ID`, `name`, `brand`, `buying_price`, `selling_price`) VALUES ('$ID','$name','$brand','$buying_price','$selling_price')";
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
    // $sql = "SELECT * FROM products";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         echo "id: " . $row["ID"]. " - Name: " . $row["name"]. " " . $row["brand"]. "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }
    // $conn->close();

?>