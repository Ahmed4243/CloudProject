<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $age = $_POST['Age'];
    $id = $_POST['Id'];
    $cgpa = $_POST['CGPA'];
    
    if (!ctype_digit($id)) {
        echo "Error: ID must contain only digits.<br>";
        exit;
    }

    if ($cgpa > 4) {
        echo "Error: CGPA must not be greater than 4.<br>";
        exit;
    }

    $sql = "INSERT INTO Student (FirstName, LastName, ID, Age, CGPA) VALUES ('$firstName', '$lastName', '$id', '$age', '$cgpa')";
    
    if (mysqli_query($con, $sql)) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>

<?php include 'input.html';?>
<style>
<?php include 'index.css';?>
</style>