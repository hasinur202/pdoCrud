<?php 
include 'inc/header.php'; 
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<table>
	<tr>
		<td>Name  </td>
		<td>
			<input type="text" name="name" required="1" />
		</td>
	</tr>

	<tr>
		<td>E-mail</td>
		<td>
			<input type="text" name="email" required="1" />
		</td>
	</tr>

	<tr>
		<td>Website</td>
		<td>
			<input type="text" name="website" required="1" />
		</td>
	</tr>

	<tr>
		<td>Comment</td>
		<td>
			<textarea name="comment" rows="4" cols="40" required="1"></textarea>
		</td>
	</tr>

	<tr>
		<td>Gender</td>
		<td>
			<input type="radio" name="gender" value="female"/>Female
			<input type="radio" name="gender" value="male"/>Male
		</td>
	</tr>

	<tr>
		<td></td>
		<td>
			<input type="submit" name="submit" value="Submit" />
		</td>
	</tr>

</table>
</form>


<?php
	$name = $email = $website = $comment = $gender = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name 		= validate($_POST["name"]);
		$email 		= validate($_POST["email"]);
		$website 	= validate($_POST["website"]);
		$comment 	= validate($_POST["comment"]);
		$gender 	= validate($_POST["gender"]);


		}

	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>

			<table class="">

				<tr>
				
					<th width="20%">Name</th>
					<th width="30%">E-mail</th>
					<th width="30%">Website</th>
					<th width="20%">Comment</th>
					<th width="20%">Gender</th>
				</tr>


				<tr>
					
					<td> <?php echo $name; ?> </td>
					<td> <?php echo $email; ?> </td>
					<td> <?php echo $website; ?> </td>
					<td> <?php echo $comment; ?> </td>
					<td> <?php echo $gender; ?></td>
					
				</tr>

			</table>



<?php include 'inc/footer.php'; ?>