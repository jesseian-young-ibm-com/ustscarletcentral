<?php
include "./includes/admindashboard.php";
include "model/admin/DatabaseConn.php";
?>

<div class="main_content">

	<div class="wrapper">
		<h1> Online Recruitment Applicants </h1><br>
	</div>

	<input type="checkbox" onclick="myFunction()">Hide Registration

	<div class=" box">
		<h4>Pending</h4>
		<table>
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Department</th>
					<th>Date and Time</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = $db->query("SELECT * FROM requests WHERE status='Pending' ORDER BY id DESC");
				while ($result = $query->fetch_assoc()) {
				?>

					<tr>
						<td>
							<?= $result['first_name'] ?>
						</td>
						<td>
							<?= $result['last_name'] ?>
						</td>
						<td>
							<?= $result['department'] ?>
						</td>
						<td>
							<?= $result['date_and_time_of_request'] ?>
						</td>
						<td>
							<a href="#" onclick="acceptItem(<?= $result['id'] ?>)"><i class="fa-solid fa-check" id="edit-symbol">Accept</i></a>
							<a href="#" onclick="deleteItem(<?= $result['id'] ?>)"><i class="fa-solid fa-x" id="delete-symbol">Reject</i></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<h4>Accepted</h4>
		<table>
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Department</th>
					<th>Date and Time</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = $db->query("SELECT * FROM requests WHERE status='Accepted' ORDER BY id DESC");
				while ($result = $query->fetch_assoc()) {
				?>

					<tr>
						<td>
							<?= $result['first_name'] ?>
						</td>
						<td>
							<?= $result['last_name'] ?>
						</td>
						<td>
							<?= $result['department'] ?>
						</td>
						<td>
							<?= $result['date_and_time_of_request'] ?>
						</td>
						<td>
							<a href="#" onclick="deleteAcceptedItem(<?= $result['id'] ?>)"><i class="fa-solid fa-x" id="delete-symbol"></i></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<h4>Rejected</h4>
		<table>
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Department</th>
					<th>Date and Time</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = $db->query("SELECT * FROM requests WHERE status='Rejected' ORDER BY id DESC");
				while ($result = $query->fetch_assoc()) {
				?>

					<tr>
						<td>
							<?= $result['first_name'] ?>
						</td>
						<td>
							<?= $result['last_name'] ?>
						</td>
						<td>
							<?= $result['department'] ?>
						</td>
						<td>
							<?= $result['date_and_time_of_request'] ?>
						</td>
						<td>
							<a href="#" onclick="deleteRejectedItem(<?= $result['id'] ?>)"><i class="fa-solid fa-x" id="delete-symbol"></i></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>


	<div class="display">
		<form method='post' action='model/DownloadCSV.php'>
			<input type='submit' class="btnprint" value='PRINT' name='Export'>
			<?php
			$query = "SELECT * FROM requests";
			$result = mysqli_query($db, $query);
			$user_arr = array();
			while ($row = mysqli_fetch_array($result)) {
				$first_name = $row['first_name'];
				$last_name = $row['last_name'];
				$student_number	 = $row['student_number'];
				$ust_email = $row['ust_email'];
				$department = $row['department'];
				$phone_number	 = $row['phone_number'];
				$year_level	 = $row['year_level'];
				$birthday = $row['birthday'];
				$date_and_time_of_request = $row['date_and_time_of_request'];
				$status	 = $row['status'];
				$user_arr[] = array(
					$first_name, $last_name, $student_number, $ust_email, $department, $phone_number, $year_level, $birthday, $date_and_time_of_request, $status
				);
			?>
			<?php
			}
			?>
			<?php
			$serialize_user_arr = serialize($user_arr);
			?>
			<textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
		</form>
		<!-- <button class="btnprint">PRINT</button> -->

	</div>

</div>

<script>
	function acceptItem(id) {
		Swal.fire({
			title: 'Warning',
			text: "Accept Account ID" + " " + id,
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ok'
		}).then((result) => {
			if (result.value) {
				location.href = 'model/AcceptRequest.php?requestId=' + id;
			}
		})
	}
</script>

<script>
	function deleteItem(id) {
		Swal.fire({
			title: 'Warning',
			text: "Delete Account ID" + " " + id,
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#3085d6',
			confirmButtonText: 'Delete'
		}).then((result) => {
			if (result.value) {
				location.href = 'model/RejectRequest.php?requestId=' + id;
			}
		})
	}
</script>

<script>
	function deleteAcceptedItem(id) {
		Swal.fire({
			title: 'Warning',
			text: "Delete Account ID" + " " + id,
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#3085d6',
			confirmButtonText: 'Delete'
		}).then((result) => {
			if (result.value) {
				location.href = 'model/DeleteItem.php?acceptedId=' + id;
			}
		})
	}
</script>

<script>
	function deleteRejectedItem(id) {
		Swal.fire({
			title: 'Warning',
			text: "Delete Account ID" + " " + id,
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#3085d6',
			confirmButtonText: 'Delete'
		}).then((result) => {
			if (result.value) {
				location.href = 'model/DeleteItem.php?rejectedId=' + id;
			}
		})
	}
</script>

<?php
include "./includes/adminFooter.php";
?>