<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ini Adalah Show</title>
</head>
<body>
	<h2>Ini contoh dari show</h2>

	@if(count($posts) > 0)
		<ul>
			@foreach($posts as $post)
				<a href="{{ route('post.show', $post['id']) }}"> <li>{{ $post['title'] }}</li> </a>
				<!-- <li>{{ $post['title'] }}</li> -->
			@endforeach
		</ul>
		@else
		<p>data tidak masuk</p>
	@endif
</body>
</html>