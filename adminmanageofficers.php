<?php
include "./includes/admindashboard.php";
include "model/admin/DatabaseConn.php";
?>

<div class="main_content">

        <!-- DITO KAYO MAG-ADD NG CONTENT SA LOOB NG DIV THANK YOU HEHE -->

        <h1>MANAGE OFFICERS</h1>

        <table>
                <tr>
                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'President' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;"><?= $result['position'] ?>
                                </td>

                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;"><?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'External Vice President' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <P style="font-size: 12px;"><?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Executive Secretary' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;"><?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Assistant Secretary' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;"><?= $result['position'] ?>
                                </td>
                        <?php } ?>
                </tr>
                <tr>
                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'VP for Professional Development' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;"><?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Associate VP for Alumni Affairs' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;"><?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Communications' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;"><?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Associate Vice President for Communications' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;"><?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Business and Marketing' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <P style="font-size: 12px;"><?= $result['position'] ?>
                                </td>
                        <?php } ?>
                </tr>
                <tr>
                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Finance' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;">
                                                <?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Audit and Inventory' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;">
                                                <?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Community Development' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;">
                                                <?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Arts and Design' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;">
                                                <?= $result['position'] ?>
                                </td>
                        <?php } ?>


                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Associate Vice President for Arts and Design' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;">
                                                <?= $result['position'] ?>
                                </td>
                        <?php } ?>
                </tr>
                <tr>
                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Documentation' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;">
                                                <?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Logistics' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;">
                                                <?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Athletics' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;">
                                                <?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM officers WHERE position = 'AFiCS Representative' ");
                        while ($result = $query->fetch_assoc()) {
                        ?>
                                <td>
                                        <a href="adminUpdateOfficers.php?rowid=<?= $result['id'] ?>"><i class="fas fa-edit" id="edit-symbol"></i></a>
                                        <h4><?= $result['full_name'] ?></h4>
                                        <p style="font-size: 12px;">
                                                <?= $result['position'] ?>
                                </td>
                        <?php } ?>

                        <td></td>
                </tr>
        </table>

</div>

<?php
include "./includes/adminFooter.php";
?>