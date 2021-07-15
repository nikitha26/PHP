<?php
    //Create connection
    $conn = mysqli_connect('localhost','nikitha','nikitha12345','employee');

    if(!$conn){
        die("Connection Failed". mysqli_connect_error());
    }
    
    //Create Table
    // $sql = "CREATE TABLE Developers(
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email  VARCHAR(50),
    //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    // )";

    //Insert values
    //$sql = "INSERT INTO Developers(firstname,lastname,email) VALUES('John', 'Doe', 'john@example.com')";


    //Select
    $sql = "SELECT * FROM Developer";
    $result = mysqli_query($conn,$sql);
    $hii = mysqli_num_rows($result);
    print_r($hii);
//     if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
      
    mysqli_close($conn);
?>