<?php $conn=mysqli_connect("103.8.79.247","bajukuma","4(;98Ucp7BHhkH","bajukuma_wisatabatu"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bot Telegram</title>
</head>
<body>

</body>
</html>
<?php

    $query = "SELECT * FROM wisata";
    $hasil = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($hasil)) {
            echo $row["nama_wisata"];
            
        } 
  
   
?>