<?php
session_start();
include "dbFunction.php";

$userID = $_SESSION['userid'];

$query = "SELECT * FROM sugarreading WHERE userID = $userID";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $row['readingDate']; ?></td>
            <td><?= $row['readingTimes']; ?></td>
            <td><?= $row['readingLvl']; ?></td>
        </tr>
        <?php
    }
}

mysqli_close($link);
?>