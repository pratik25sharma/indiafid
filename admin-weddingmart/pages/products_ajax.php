<?php require_once 'session.php';?>

<?php require_once 'connection.php';?>
<?php
$txt=$_POST{'product_id'};
$sql = "DELETE FROM products_images WHERE id=$txt";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
