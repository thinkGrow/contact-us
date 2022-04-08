<?php include "config.php";

extract($_POST);


$sql = 'SELECT fullname, email, messagee FROM userinfo;';
$id = 0;

if($result2 = mysqli_query($link, $sql)){
   while($row = mysqli_fetch_array($result2)){
    // print_r($row);
    echo "<td>" . ++$id . "</td>" . "<br>";
    echo "<td>" . $row['fullname'] . "</td>" ; 
    echo "<br>";
    echo "<td>" . $row['email'] . "</td>" ; 
    echo "<br>";
    echo "<td>" . $row['messagee'] . "</td>" ; 
}
}
// header('Location: admin.php');

if(! $result2 ) {
die('Could not get data: ' . mysqli_error($link));
}

mysqli_close($link);

?>