<?php


$mysqli=new mysqli("localhost" ,"root","","app");


if ($mysqli->connect_error) {
  die("Error connecting to database" . $mysqli->connect_error);
}else{
echo "connected to mysql";
}

$motor1 = $_POST['motor1'];
$motor2 = $_POST['motor2'];
$motor3 = $_POST['motor3'];
$motor4 = $_POST['motor4'];
$motor5 = $_POST['motor5'];
$motor6 = $_POST['motor6'];


{
if(isset($_POST['save'])){

    echo "<br>";

    // $my_query = "";
    //
    //  $my_query = "select * from motors WHERE id=1 ";
    //  $result = mysqli_query($mysqli, $my_query);

    $my_query = "INSERT INTO motorsname (id,motor1, motor2, motor3, motor4, motor5, motor6) VALUES ('','$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')";
    $result = mysqli_query($mysqli, $my_query);
    if($result)
    {
        echo "successfuly !";
    }
    else{
        echo "ERROR:".$my_query."<br>".mysqli_error($mysqli);
    }
}
}

{
if(isset($_POST['on'])) {
    echo "<br>";
    //
    // $my_query = "";
    //
    // $my_query = "select * from turn WHERE 1 ";
    // $result = mysqli_query($mysqli, $my_query);

    $my_query = "INSERT INTO turnon (isOn) VALUES (1)";
    $result = mysqli_query($mysqli, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}
}

?>
