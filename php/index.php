<?php $con=mysqli_connect("localhost","root","","wisata_batu"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Text</title>
</head>
<body>
	<form method="post" action="index.php">
		<input type="text" name="nama_wisata" id="nama_wisata" class="form-control" value="<?php if(!empty($_POST)){echo $_POST['nama_wisata'];} ?>" placeholder="Nama Wisata"> <button type="submit" class="btn btn-primary">Search</button>
	</form>
	<br>
	Result : <br>
	<?php 

	if (!empty($_POST)){
		$nama_wisata = $_POST['nama_wisata'];
		echo "<b>".$nama_wisata."</b><br>";
		print_r (explode(" ",$nama_wisata));
		$jum_input = count(explode(" ",$nama_wisata));
		// pecahan kata2
		for ($i=0; $i < $jum_input ; $i++) { 
			echo "<br>";
			echo $input[$i] = explode(" ",$nama_wisata)[$i];
		}
	
	?>
	<br>
	Jum Char Input : <?php echo count(explode(" ",$nama_wisata)); ?>
	<br>
	<?php 

	$query = "SELECT * FROM wisata";
 	$hasil = mysqli_query($con,$query);

	?>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Wisata</th>
				<th>Jumlah Char</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$a = 1;
			$b = 0;
			while($row = mysqli_fetch_assoc($hasil)) { ?>
			<tr>
				<td><?php echo $a++ ?></td>
				<td><?php echo $row["nama_wisata"]; ?></td>
				<td><?php echo $jumlah_char[$b++] = count(explode(" ",$row["nama_wisata"])) ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<?php
		$query = "SELECT * FROM wisata";
	 	$hasil = mysqli_query($con,$query);
	 	$c = 0;
		while($row = mysqli_fetch_assoc($hasil)){
			$id_wisata = $row["idwisata"];
			$total = 0;
			echo "<br>";
			print_r(explode(" ",$row["nama_wisata"]));
			$jum_query[$id_wisata] = count(explode(" ",$row["nama_wisata"]));

			// pecahan kata2 query per row
			$suku_sama = 0;
			for ($i=0; $i < $jum_query[$id_wisata];$i++) { 
				echo "<br>";
				echo $querys[$i] = explode(" ",$row["nama_wisata"])[$i];
				for ($j=0; $j < $jum_input ; $j++) { 
					if (ucwords($querys[$i]) == ucwords($input[$j])) {
						$suku_sama++;
					}
				}
			}
			
			echo "<br>";
			echo "<b>Memiliki kata yang sama berjumlah</b> : ".$suku_sama;
			echo "<br>";
			$jumlah_suku_sama[$id_wisata] = $suku_sama;
			// rumus
			$total = $jumlah_suku_sama[$id_wisata] /($jum_input + $jumlah_char[$c] - $jumlah_suku_sama[$id_wisata]);
			echo "Nilai :".round($total,3);
			echo "<br>";
			$total_array[$id_wisata] = round($total,3);
			$c++;

		}
		arsort($total_array);
		// print_r($total_array);
		echo "<br>";
		echo "<b>Hasinya adalah : </b>";
		echo "<br>";
		$a = 1;
		foreach ($total_array as $key => $value) {
			if ($a == 1) {
				if ($value != 0) {
					$query = "SELECT * FROM wisata WHERE idwisata = '$key'";
	 				$hasil = mysqli_query($con,$query);
					while($row = mysqli_fetch_assoc($hasil)){
						echo $row["nama_wisata"]." , ".$row["informasi"];
					}
				}else{
					echo "Tidak Ditemukan";
				}
			}
			$a++;
		}
		
	} 
	 ?>
</body>
</html>
<?php 

// 0 = count, 1 = show word
// print_r(str_word_count("Hello world hajima",1));

// break text
// $str = "Jatim Park 2";
// print_r (explode(" ",$str));

// per word
// echo explode(" ",$str)[1];

// all
// $hh = "rara";
// $kk = "Rara";
// if (ucwords($hh) == ucwords($kk)) {
// 	echo "sama";
// }else{
// 	echo "beda";
// }
 ?>