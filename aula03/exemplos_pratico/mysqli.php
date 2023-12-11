<?php

// $servername = "127.0.0.1";
// $username = "root";
// $password = ""; // Create connection 
// $dbname = 'crud';

// $conn = mysqli_connect($servername, $username, $password, $dbname); // Check connection 
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Create database
// $sql = " CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
// mysqli_close($conn);


// $servername = "127.0.0.1";
// $username = "root";
// $password = ""; // Create connection 
// $dbname = 'crud';

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // sql to create table
// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// mysqli_close($conn);






// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = 'crud';


// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//     VALUES ('John', 'Doe', 'john@example.com')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);



// insert last id
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = 'crud';


// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//     VALUES ('John 20', 'Doe2', 'john2@example.com')";

// if (mysqli_query($conn, $sql)) {
//     $last_id = mysqli_insert_id($conn);
//     echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }


// mysqli_close($conn);






$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = 'crud';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "\n";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
