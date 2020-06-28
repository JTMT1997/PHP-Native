<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Data</title>
	
	<link rel="stylesheet" type="text/css" href="TimeCircles/TimeCircles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="jquery-3.3.1.min.js"></script>
<script src="TimeCircles/TimeCircles.js"></script>


</head>
<body>
<div class="container">
<!-- 
<?php
include 'koneksi.php';

// $data = mysqli_query($koneksi,"select * from `user` WHERE orderNumber=10100");
// $row= mysqli_fetch_object($data);
   $date = strtotime($row_tournaments['orderNumber']);
    $remaining = $date - time();
    $days_remaining = floor($remaining / 86400);
    $hours_remaining = floor(($remaining % 86400) / 3600);
    $minutes_remaining = floor(($remaining % 3600) / 60);
    $seconds_remaining = ($remaining % 60);
    echo "<p>$days_remaining <span style='font-size:.3em;'>dias</span> $hours_remaining <span style='font-size:.3em;'>horas</span> $minutes_remaining <span style='font-size:.3em;'>minutos</span> $seconds_remaining <span style='font-size:.3em;'>segundos</span></p>";


?> -->

<!-- <div id="CountDown" class="example" data-timer="900" data-date="<?php echo $row->requiredDate;?>"></div> -->


	
	<br/>
	<a href="add.php"> Tambah Data</a>
	<br/>
	<br/>
	<table border="1" class="table">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		// $data = mysqli_query($koneksi,"select * from post");
		$data = mysqli_query($koneksi,"SELECT post.posts,  user.nama, user.pekerjaan
		FROM post
		INNER JOIN user ON  post.id=user.id;");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama'] ?></td>
				<td><?php echo $d['posts']; ?></td>
				<td><?php echo $d['pekerjaan']; ?></td>

				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
                    <p><a href="logout.php">Logout</a></p>

</div>
<script>
	$("#CountDown").TimeCircles().reverse();

</script>

</body>
</html>