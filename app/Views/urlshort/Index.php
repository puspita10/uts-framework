<!DOCTYPE html>
<html>
<head>
	<title>URL Short</title>
</head>
<body>
	Link Shorter <a href="link">Buat</a>

	<p>URL Shorter <br>
	Masukkan Link Dibawah ini</p>
	<form action="<?= site_url('urlshort/save') ?>" method="POST">
		<input type="text" name="url_code">
		<input type="text" name="url_addres">
		<button>Go</button>

	<table border="1">
	<tr>
	<th>NO</th>
	<th>url_id</th>
	<th>url_code</th>
	<th>url_addres</th>
	<th>url_created_at</th>

	
	</tr>
	<tbody>	

	<?php foreach ($url  as$row) :?>
	<tr>
		
		
	<td><?= $row['url_id'] ?></td>
	<td><?= $row['url_code'] ?></td>
	<td><?= $row['url_address'] ?></td>
	<td><?= $row['url_created_at'] ?></td>
		<td>
		<a href="<?=site_url('Urlshort/edit/'.$row['url_id'])?>">Edit</a>
		<a href="<?=site_url('Urlshort/hapus/'.$row['url_id'])?>">hapus</a>
		</td>
		</tr>
	<?php endforeach; ?>
	</body>
	</table>
	</body>
</html>