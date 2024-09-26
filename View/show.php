<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>

<body>
    <p>Book Show</p>
    <br>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
        </tr>
        <?php
        echo '<tr>
				<td>' . $book['title'] . '</td>
				<td>' . $book['author'] . '</td>
				<td>' . $book['year'] . '</td>
				</tr>';

        ?>
    </table>
</body>

</html>