<?php
include "./includes/admindashboard.php";
include "model/admin/DatabaseConn.php";
?>

<div class="main_content">

        <!-- DITO KAYO MAG-ADD NG CONTENT SA LOOB NG DIV THANK YOU HEHE -->

        <h1>MANAGE ANNOUNCEMENTS</h1>

        <table>
                <thead>
                        <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date and Time</th>
                                <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        $query = $db->query("SELECT * FROM announcements ORDER BY id DESC");
                        while ($result = $query->fetch_assoc()) {
                        ?>

                                <tr>
                                        <td>
                                                <?= $result['id'] ?>
                                        </td>
                                        <td>
                                                <?= $result['title'] ?>
                                        </td>
                                        <td>
                                                <?= $result['description'] ?>
                                        </td>
                                        <td>
                                                <?= $result['date_and_time'] ?>
                                        </td>
                                        <td>
                                                <a href="#" onclick="archiveItem(<?= $result['id'] ?>)"><i class="fas fa-archive"></i></a>
                                                <a href="#" onclick="deleteItem(<?= $result['id'] ?>)"><i class="fas fa-dumpster" id="delete-symbol"></i>
                                        </td>
                                </tr>
                        <?php } ?>
                </tbody>
        </table>

        <table>
                <thead>
                        <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date and Time</th>
                                <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        $query = $db->query("SELECT * FROM hidden_announcements ORDER BY id DESC");
                        while ($result = $query->fetch_assoc()) {
                        ?>

                                <tr>
                                        <td>
                                                <?= $result['id'] ?>
                                        </td>
                                        <td>
                                                <?= $result['title'] ?>
                                        </td>
                                        <td>
                                                <?= $result['description'] ?>
                                        </td>
                                        <td>
                                                <?= $result['date_and_time'] ?>
                                        </td>
                                        <td>
                                                <a href="#" onclick="unArchiveItem(<?= $result['id'] ?>)"><i class="fas fa-archive"></i></a>
                                                <a href="#" onclick="deleteItem(<?= $result['id'] ?>)"><i class="fas fa-dumpster" id="delete-symbol"></i>
                                        </td>
                                </tr>
                        <?php } ?>
                </tbody>
        </table>
</div>

<script>
        function archiveItem(id) {
                Swal.fire({
                        title: 'Warning',
                        text: "Archive Account ID" + " " + id,
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ok'
                }).then((result) => {
                        if (result.value) {
                                location.href = 'model/admin/ArchiveItem.php?itemId=' + id;
                        }
                })
        }

        function unArchiveItem(id) {
                Swal.fire({
                        title: 'Warning',
                        text: "Unarchive Account ID" + " " + id,
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ok'
                }).then((result) => {
                        if (result.value) {
                                location.href = 'model/admin/ArchiveItem.php?hiddenId=' + id;
                        }
                })
        }

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
                                location.href = 'model/DeleteItem.php?announcementId=' + id;
                        }
                })
        }
</script>

<?php
include "./includes/adminFooter.php";
?>