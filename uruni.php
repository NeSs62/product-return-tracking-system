<html>
    <haed>   

    <link rel="stylesheet" type="text/css" href="admin.css">
    <div class="topnav">
  <a href="home.php" class="split">Home</a>
</div>
    </haed>
    <body>
    <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "uruni";
  
  $conn=new mysqli($servername,$username,$password,$dbname);
  
  if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
  }

$sql ="Select  Cariismi,iadesebebi,kacadet,tarih FROM uruniade";
$result =$conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br> Cari ismi: ". $row["Cariismi"]. " - İade Sebebi: ". $row["iadesebebi"]. " - Kaç Adet: " 
    . $row["kacadet"]." -Tarih: ".$row["tarih"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    </body>
</html>