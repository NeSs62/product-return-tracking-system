<html>
    <head>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <div class="topnav">
  <a href="home.php" class="split">Home</a>
</div>
</head>
<body>
   
</body>
<?php

$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cari";
  
  $conn=new mysqli($servername,$username,$password,$dbname);
  
  if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
  }

$sql ="SELECT carikodu,carismi,caril,carilce,caradres,cartel from satis";
$result=$conn->query($sql);
if($result->num_rows > 0){
   // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Cari kodu: ". $row["carikodu"]. " - Cari İsmi: ". $row["carismi"]. " - Car il: " . $row["caril"] . "-Car ilce: " 
        .$row["carilce"]. " -Cari Adres: ". $row["caradres"]. "-Cari Telefon: ". $row["cartel"]. "<br>";
        }
    } else {
        echo "0 results";
}
?>
</html>




