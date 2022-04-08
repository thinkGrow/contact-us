<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
        text-align: center;
        }

        .admin table,
        th, td
        {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        border: 1px solid black;
        }

        .admin table {
        width: 100%;
        }

        .admin ul {
        list-style: none;
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
        }

        .admin li {
        list-style-position: inside;
        padding-right: 1cm;
        margin: auto;
        }
    </style>
</head>

<body class="admin">
    <h1>Welcome to Admin Section</h1>
    <table class>
        <thead class>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
          </tr>
         </thead> 

         <?php include "config.php";

extract($_POST);


$sql = 'SELECT fullname, email, messagee FROM userinfo;';
$id = 0;

if($result2 = mysqli_query($link, $sql)){
    echo "<tbody>";
   while($row = mysqli_fetch_array($result2)){
    // print_r($row);
    echo "<tr>";
    echo "<td>" . ++$id . "</td>" ;
    echo "<td>" . $row['fullname'] . "</td>" ; 
    echo "<td>" . $row['email'] . "</td>" ; 
    echo "<td>" . $row['messagee'] . "</td>" ; 
    echo "</tr>";
}
}

if(! $result2 ) {
die('Could not get data: ' . mysqli_error($link));
}
echo "</tbody>";
echo "</table>";

mysqli_close($link);

?>                         
      
      
</body>
</html>