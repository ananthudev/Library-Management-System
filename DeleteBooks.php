<?php
include("DBConnection.php");

$isbn = isset($_REQUEST["ISBN"]) ? $_REQUEST["ISBN"] : '';

$query = "DELETE FROM book_info WHERE ISBN='$isbn'";

if (mysqli_query($db, $query)) {
    header("location: DisplayBooks.php");
} else {
    echo "Error deleting record: " . mysqli_error($db);
}

mysqli_close($db);
?>
