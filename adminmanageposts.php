<?php
include "./includes/admindashboard.php";
include "model/admin/DatabaseConn.php";
?>

<div class="main_content">

        <!-- DITO KAYO MAG-ADD NG CONTENT SA LOOB NG DIV THANK YOU HEHE -->

        <h1>MANAGE POSTS</h1>

        <h2>Active</h2>

        <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <table>
                <thead>
                        <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Image</th>
                                <th>Date and Time</th>
                                <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        $query = $db->query("SELECT * FROM posts");
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
                                                <?= $result['short_description'] ?>
                                        </td>
                                        <td>
                                                <?= $result['long_description'] ?>
                                        </td>
                                        <td>
                                                <img src="assets/uploads/<?= $result['uploads'] ?>" width="100px" height="100px" />
                                        </td>
                                        <td>
                                                <?= $result['date_and_time'] ?>
                                        </td>
                                        <td>
                                                <a href="#" onclick="archiveItem(<?= $result['id'] ?>)"><i class="fas fa-archive"></i></a>
                                                <a href="#" onclick="deleteActiveItem(<?= $result['id'] ?>)"><i class="fas fa-dumpster" id="delete-symbol"></i></a>
                                        </td>
                                </tr>
                        <?php } ?>
                </tbody>
        </table>

        <h2>Archive</h2>

        <?php if (isset($_GET['archive'])) { ?>
                <p class="success"><?php echo $_GET['archive']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['errorArchive'])) { ?>
                <p class="error"><?php echo $_GET['errorArchive']; ?></p>
        <?php } ?>

        <table>
                <thead>
                        <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date and Time</th>
                                <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        $query = $db->query("SELECT * FROM archives");
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
                                                <img src="assets/uploads/<?= $result['uploads'] ?>" width="100px" height="100px" />
                                        </td>
                                        <td>
                                                <?= $result['date_and_time'] ?>
                                        </td>
                                        <td>
                                                <a href="#" onclick="unArchiveItem(<?= $result['id'] ?>)"><i class="fas fa-archive"></i></a>
                                                <a href="#" onclick="deleteArchiveItem(<?= $result['id'] ?>)"><i class="fas fa-dumpster" id="delete-symbol"></i></a>
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
                                location.href = 'model/admin/ArchiveItem.php?postId=' + id;
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
                                location.href = 'model/admin/ArchiveItem.php?archiveId=' + id;
                        }
                })
        }

        function deleteActiveItem(id) {
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
                                location.href = 'model/DeleteItem.php?postId=' + id;
                        }
                })
        }

        function deleteArchiveItem(id) {
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
                                location.href = 'model/DeleteItem.php?archiveDelId=' + id;
                        }
                })
        }
</script>

<?php
include "./includes/adminFooter.php";
?>