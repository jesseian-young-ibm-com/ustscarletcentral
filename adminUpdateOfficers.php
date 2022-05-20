<?php
include "./includes/admindashboard.php";
include "model/admin/DatabaseConn.php";
?>

<?php
$id = $_GET['rowid'];
$query = $db->query("SELECT * FROM officers WHERE id = '$id' ");
$result = $query->fetch_assoc();

if (isset($_POST['update_submit'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    date_default_timezone_set('Asia/Manila');
    $last_edited = date('F d, Y @ h:i:sa, l');

    $full_name = validate($_POST['full_name']);

    $db->query("UPDATE officers SET full_name = '$full_name' , last_edited = '$last_edited' WHERE id = '$id'");
    header("Location: adminmanageofficers.php?success=Updated Successfully");
}

?>

<div class="main_content">

    <!-- DITO KAYO MAG-ADD NG CONTENT SA LOOB NG DIV THANK YOU HEHE -->

    <h1>UPDATE RECORD</h1>

    <form method="post" action="">
        <label>Full Name</label>
        <input type="text" name="full_name" required>
        <input type="submit" name="update_submit" value="Update">
    </form>


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