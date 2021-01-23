<?php foreach($krs as $krs): ?>
<head>
	<title>Kartu Rencana Studi</title>
</head>


<center>
	<table width="100%">
		<tr>
			<td width="20%">
				<img src="img/logo.png" style="width: 125; height: 100;">
			</td>
			<td>
				<center>
				<h3>STMIK Bandung</h3>
				<h5>Jl. Cikutra 113A Telp. (022)7207777. Fax.(022)7207777</h5>
				<h5>|e-mail : info@stmik-bandung.ac.id | Website:www.stmik-bandung.ac.id|</h5>
				</center>
			</td>
		</tr>
		<tr>
			<td colspan="2"><h3><center>Kartu Rencana Studi</center></h4></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><p>Jurusan: <?php echo $krs->jurusan?></p><p>Nama: <?php echo $krs->nama?></p></td>
		</tr>
		<tr>
		</tr>
	</table>
</center>
<body>
<hr/>
<?php $data = explode(',', $krs->matakuliah); ?>
<table border="1" width="100%" style="font-size: 11;">
	<tr>
		<th style="width:15%">No</th>
		<th>Nama Matakuliah</th>
	</tr>
	<?php 
	$no = 1;
	{
		?>
		<tr>
			<td style="text-align: center;"><?php echo $no++; ?></td>
			<td>
				<?php echo $data[0];  ?>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;"><?php echo $no++; ?></td>
			<td>
				<?php echo $data[1];  ?>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;"><?php echo $no++; ?></td>
			<td>
				<?php echo $data[2];  ?>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;"><?php echo $no++; ?></td>
			<td>
				<?php echo $data[3];  ?>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;"><?php echo $no++; ?></td>
			<td>
				<?php echo $data[4];  ?>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;"><?php echo $no++; ?></td>
			<td>
				<?php echo $data[5];  ?>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;"><?php echo $no++; ?></td>
			<td>
				<?php echo $data[6];  ?>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;"><?php echo $no++; ?></td>
			<td>
				<?php echo $data[7];  ?>
			</td>
		</tr>
		<tr>
			<td style="text-align: center; font-weight: bold;">Total SKS</td>
			<td style="text-align: center; font-weight: bold;">
				<?php echo $krs->sks;  ?>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<?php endforeach ?>
</body>
