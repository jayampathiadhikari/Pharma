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

    $id = 10;
    $name = 'jayx';
    $brand = 'fuk';
    $bprice = 10;
    $sprice = 20;

    $sql = "INSERT INTO products VALUES ($id, $name, $brand,$bprice,$sprice)";
    if ($conn->query($sql) === TRUE) {
      echo 'Connected successfully';
        $details[]=array(
            'status'=>'success'
        );
        
    } 
    else {
      echo 'Connected unsuccessfully';
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