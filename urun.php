<html>
<head>
<link rel="stylesheet" type="text/css" href="admin.css">
<div class="topnav">
  <a href="home.php" class="split">Home</a>
</div>
</head>
</html>
<body>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "urun";
  
  $conn=new mysqli($servername,$username,$password,$dbname);
  
  if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
  }

$sql ="Select  stokkodu,stokadi,stokadeti FROM urunler";
$result =$conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br> Stok Kodu: ". $row["stokkodu"]. " - Stok Adi: ". $row["stokadi"]. " - Stok Adeti: " . $row["stokadeti"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>