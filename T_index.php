<?php 
include 'inc/header.php'; 
include 'Teacher.php';
?>

<section class="mainleft">
	<?php
		$user = new Teacher();

		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$department = $_POST['department'];
			$age = $_POST['age'];

			$user->setName($name);
			$user->setDepartment($department);
			$user->setAge($age);

			if($user->insert()){
				echo '<span class="insert"> Data inserted successfully...</span>';
			}
		}

		if(isset($_POST['update'])){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$department = $_POST['department'];
			$age = $_POST['age'];

			$user->setName($name);
			$user->setDepartment($department);
			$user->setAge($age);

			if($user->update($id)){
				echo '<span class="insert"> Data updated successfully...</span>';
			}
		}

		 ?>

	<?php

		if(isset($_GET['action']) && $_GET['action']=='delete'){
			$id = (int)$_GET['id'];

			if($user->delete($id)){
				echo '<span class="delete"> Data deleted successfully...</span>';
			}
		}
	?>


	<?php

		if(isset($_GET['action']) && $_GET['action']=='update'){
			$id = (int)$_GET['id'];
			$result = $user->readById($id);

	?>
			<form method="post" action="">
				<table>

					<input type="hidden" name="id" value="<?php echo $result['id'];?>" />

					<tr>
						<td>Name  </td>
						<td>
							<input type="text" value="<?php echo $result['name'];?>" name="name" required="1"/>
						</td>
					</tr>

					<tr>
						<td>Department</td>
						<td>
							<input type="text"  value="<?php echo $result['department'];?>" name="department" required="1"/>
						</td>
					</tr>

					<tr>
						<td>Age</td>
						<td>
							<input type="text"  value="<?php echo $result['age'];?>" name="age" required="1"/>
						</td>
					</tr>

					<tr>
						<td></td>
						<td>
							<input type="submit" name="update" value="Update" />
							<a href="T_index.php">Go Back</a>
						</td>
					</tr>
				</table> 
			</form>
		<?php }else{ ?>

	<form method="post" action="">
		<table>
			<tr>
				<td>Name  </td>
				<td>
					<input type="text" placeholder="Your name here.." name="name" required="1" />
				</td>
			</tr>

			<tr>
				<td>Department</td>
				<td>
					<input type="text" placeholder="Your Department here..." name="department" required="1" />
				</td>
			</tr>

			<tr>
				<td>Age</td>
				<td>
					<input type="text" placeholder="Your age..." name="age" required="1" />
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit" />
					
				</td>
			</tr>

		</table>
	</form> <?php }?>
</section>


<section class="mainright">
<table class="tblone">
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Department</th>
		<th>Age</th>
		<th>Action</th>
	</tr>

	<?php
		$i=0;
		foreach ($user->readAll() as $key => $value) {
		$i++;	
	?>

	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $value["name"];?></td>
		<td><?php echo $value["department"];?></td>
		<td><?php echo $value["age"];?></td>
		<td>
			<?php echo "<a href='T_index.php?action=update&id=".$value['id']."'>Edit</a>";?>

		 ||
			<?php echo "<a href='T_index.php?action=delete&id=".$value['id']."' onClick = 'return confirm(\"Are you sure to Delete Data...?\")'>Delete</a>";?>
		</td>
	</tr>
<?php }?>

</table>
</section>


<?php include 'inc/footer.php'; ?>