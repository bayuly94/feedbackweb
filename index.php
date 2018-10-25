<table border="1">
	<thead>
		<th>No</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Answer 1</th>
		<th>Answer 2</th>
		<th>Answer 3</th>
		<th>Rating</th>
		<th>Smiley</th>
		<th>Created at</th>
	</thead>
	<tbody>
		<?php
			include "conn.php";

			// query sql
			$sql = "SELECT * FROM feedback ORDER BY id DESC";
			$query = mysqli_query($conn, $sql) or die (mysqli_error());

			$no = 1; // increment

			while($data = mysqli_fetch_array($query)){
				echo "<tr>
						<td>".$no."</td>
						<td>".$data['fullname']."</td>
						<td>".$data['email']."</td>
						<td>".$data['answer1']."</td>
						<td>".$data['answer2']."</td>
						<td>".$data['answer3']."</td>
						<td>".$data['answer4']."</td>
						<td>".$data['answer5']."</td>
						<td>".$data['created_at']."</td>
					  </tr>";
				$no++; // + 1
			}

		?>

		
	</tbody>
</table>
