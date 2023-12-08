<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION PAGE</title>
</head>
<body>
    <form action ="registration.php"method=POST>
    <label>NAME</label>
    <input type="text"name="NAME">
    <br><br>
    <label>EMAIL</label>
    <input type="varchar"name="EMAIL">
    <br><br>
    <label>CONTACT</label>
    <input type="number"name="CONTACT">
    <br><br>
    <label>PASSWORD</label>
    <input type="varchar"name="PASSWORD">
    <br><br>
    <label>CONFIRM PASSWORD</label>
    <input type="varchar"name="CONFIRM PASSWORD">
    <br><br>
    <button type="submit">SUBMIT</button>
<forms></body></html>
    
    <?php
    $NAME=$_POST['NAME'];
    $EMAIL=$_POST['EMAIL'];
    $CONTACT=$_POST['CONTACT'];
    $PASSWORD=$_POST['PASSWORD'];
    $CONFIRM_PASSWORD=$_POST['CONFIRM_PASSWORD'];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="social media app";

    $conn=mysqli-connect($servername,$username,$password,$dbname);

    $sql="INSERT INTO instagram(`Name`,`Email`,`Contact`,`Password`)VALUES($NAME,$EMAIL,$CONTACT,$PASSWORD);
    //$sql="SELECT" * FROM instagram";
    $result=mysqli_query($conn,$sql);

    //Fetch the result data 
    //if (mysqli_num_rows($result)>0{
    //     while($row=mysqli_fetch_assoc($result)){
    //         "<br>","<br>";
    //     echo"ID: " .$ROW["ID"]."<br>".
    //       "Name:"  . $row["Name"]."<br>".
    //      "No of student:" .$row["No_of_students"] ."<br>";

    //     }
    // }else{
    //      echo"0results";
    // }

    // Close the connection
    mysqli_close($conn);

    ?>

    

</body>
</html>