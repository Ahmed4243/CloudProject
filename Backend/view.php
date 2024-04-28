<?php include '../Frontend/pages/view.html'; ?>
<style>
<?php include '../Frontend/index.css'; ?>
</style>

<?php
include("connection.php");

$sql = "SELECT FirstName, LastName, ID, Age, CGPA FROM Student";
$result = mysqli_query($con, $sql);

$counter = 0;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $fullName = $row['FirstName'] . " " . $row['LastName'];
        $id = $row['ID'];
        $age = $row['Age'];
        $cgpa = $row['CGPA'];

        if ($counter % 4 == 0) {
            echo '<div class="flex-container">';
        }

        echo '  <div class="card">';
        echo '    <div class="card-details">';
        echo '      <p class="text-title">' . $fullName . '</p>';
        echo '      <p class="text-body">ID: ' . $id . '<br>Age: ' . $age . '<br>CGPA: ' . $cgpa . '</p>';
        echo '    </div>';
        echo '    <button class="card-button">More info</button>';            
        echo '  </div>';

        if ($counter % 4 == 3) {
            echo '</div>';
        }

        $counter++;
    }

    if ($counter % 4 != 0) {
        echo '</div>';
    }
} else {
    echo "No students found.";
}
?>


