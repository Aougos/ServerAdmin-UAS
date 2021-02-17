<?php
   echo "hello world";
   $link = mysqli_connect("172.22.0.2","root","root","trucorp");
   if (!$link) {
      echo "tidak bisa konek ke MySql" . PHP_EOL;
      exit;
   }
   $db = "SELECT * FROM users";
   $result = $link->query($db);

   if ($result->num_rows > 0) {
      echo "<table><tr><th>ID</th><th>Nama</th><th>Kantor</th></tr>";
      while($row = $result->fetch_assoc()) {
//	 echo "Table User Database trucorp-2" . PHP_EOL;
         echo "<tr><td>id: " . $row["ID"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Kantor"]. "</td></tr>" . PHP_EOL;
      }
      echo "</table>";
   }else {
      echo "Database Kosong" . PHP_EOL;
   }
   echo "Host Information: " . mysqli_get_host_info($link) . PHP_EOL;
   mysqli_close($Link);
?>



