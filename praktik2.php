<html>
<head>
	<title></title>
</head>
<body>
		
	<h2></h2>


        <form>
		<table border="1" cellspacing="0">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>

                        <?php  for ($no = 1, $i=1, $a=10; $i<=10, $a>=1  ; $i++, $a--) { ?>

			<tr>
				<td> <?php echo $no; ?></td>
				<td><?php echo "nama ke $i"; ?></td>
				<td><?php echo "kelas $a"; ?></td>
			</tr>

		<?php $no++; } ?>

		</table>
	</form>
</body>
</html>