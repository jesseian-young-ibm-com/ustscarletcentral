<?php
include "./includes/admindashboard.php";
include "model/admin/DatabaseConn.php";
?>

<div class="main_content">

        <!-- DITO KAYO MAG-ADD NG CONTENT SA LOOB NG DIV THANK YOU HEHE -->

        <h1>STUDENT RECORDS</h1>

        <table>
                <thead>
                        <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Student Number</th>
                                <th>Ust Email</th>
                                <th>Department</th>
                                <th>Phone Number</th>
                                <th>Year Level</th>
                                <th>Birthday</th>
                                <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        $query = $db->query("SELECT * FROM members ORDER BY id DESC");
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
                                                <?= $result['student_number'] ?>
                                        </td>
                                        <td>
                                                <?= $result['ust_email'] ?>
                                        </td>
                                        <td>
                                                <?= $result['department'] ?>
                                        </td>
                                        <td>
                                                <?= $result['phone_number'] ?>
                                        </td>
                                        <td>
                                                <?= $result['year_level'] ?>
                                        </td>
                                        <td>
                                                <?= $result['birthday'] ?>
                                        </td>
                                        <td>
                                                <a href="#" onclick="deleteItem(<?= $result['id'] ?>)"><i class="fas fa-dumpster" id="delete-symbol"></i>
                                        </td>
                                </tr>
                        <?php } ?>
                </tbody>
        </table>

</div>

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
                                location.href = 'model/DeleteItem.php?studentId=' + id;
                        }
                })
        }
</script>

<?php
include "./includes/adminFooter.php";
?>