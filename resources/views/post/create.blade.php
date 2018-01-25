<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing</title>
</head>
<body>
	<h2>Ini Adalah View Create</h2>
	<form class="container" action="{{ route('post.store') }}" method="POST">
		{{ csrf_field() }} 
		<!-- jangan lupa menambahkan ibi jika method post -->
		<div class="form-group">
			<label for="">Nama</label>
			<input type="text" name="nama" class="form-control" placeholder="masukan nama">
		</div>
		<div class="form-group">
			<label for="">Kelas</label>
			<input type="text" name="kelas" class="form-control" placeholder="masukan nama">
		</div>
		<div class="form-group">
			<label for="">Alamat</label>
			<input type="text" name="alamat" class="form-control" placeholder="masukan nama">
		</div>
		<div class="form-group">
			<label for="">Nomor</label>
			<input type="text" name="nomor" class="form-control" placeholder="masukan nama">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>