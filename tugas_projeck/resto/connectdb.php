<?php
function connect()
{
  $servername = "127.0.0.1";
  $username = "root";
  $password = "root";
  $dbname = 'sandwicth_rawr';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);


  // Check connection error
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // connection success
  // echo "Connected successfully";
  return $conn;
}

function closeConnect($conn)
{

  $conn->close();

}
?>