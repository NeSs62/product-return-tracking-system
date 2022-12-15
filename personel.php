
<html>
  <head>

  <link rel="stylesheet" type="text/css" href="admin.css">
  <div class="topnav">
  <a href="home.php" class="split">Home</a>
</div>
  </head>
<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "personel";
  
  $conn=new mysqli($servername,$username,$password,$dbname);
  
  if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
  }

$sql ="Select  Personeladi,Personelsoyadi,Personelmail,Tarih FROM personels";
$result =$conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br> Personel adi: ". $row["Personeladi"]. " - Personel soyadi: ". $row["Personelsoyadi"]. " - Personel mail: " . $row["Personelmail"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</html>

