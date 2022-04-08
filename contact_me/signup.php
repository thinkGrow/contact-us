<?php include "config.php";
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $messagee = $_POST['messagee'];

    //attempt insert query execution

    $sql = "INSERT INTO userinfo (fullname, email, messagee) VALUES ('$fullname', '$email', '$messagee')";
    // $sql = "INSERT INTO userinfo ('$fname', '$lname') VALUES (first_name, last_name)";
    if(mysqli_query($link, $sql)){
        // header('Location: admin.php');
        echo "Message sent";
    }
    else{
        echo "Error" . mysqli_error($link);
    }
    //close connection

    mysqli_close($link);

?>
    