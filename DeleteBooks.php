<?php
include("DBConnection.php");

$isbn = isset($_REQUEST["isbn"]) ? $_REQUEST["isbn"] : '';

$query = "delete from book_info where ISBN = '$isbn'";

if (mysqli_query($db, $query)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($db);
}

mysqli_close($db);

header("Location:DisplayBooks.php");
exit;
?>
