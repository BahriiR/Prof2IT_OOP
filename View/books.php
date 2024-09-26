<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Книги</h1>
	<h2>Кращі фентезі книги всіх часів</h2>
	<table>
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Year</th>
		</tr>
		<?php
		foreach ($books as $book) {
			echo '<tr>
				<td>' . $book['title'] . '</td>
				<td>' . $book['author'] . '</td>
				<td>' . $book['year'] . '</td>
				</tr>';
		}
		?>
	</table>
</body>

</html>